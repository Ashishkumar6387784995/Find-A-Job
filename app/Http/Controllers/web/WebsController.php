<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\web\Webs;
use App\Traits\TranslationTrait;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class WebsController extends Controller
{
         use TranslationTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = [
            'status' => $request->status,
        ];
        $pageTitle = trans('messages.list_form_title',['form' => trans('messages.webs')] );
        
        $auth_user = authSession();
        $assets = ['datatable'];
        return view('web.allweb.index', compact('pageTitle','auth_user','assets','filter'));
    }




    public function index_data(DataTables $datatable,Request $request)
    {
        
        $query = Webs::with('translations');
        $filter = $request->filter;
        $primary_locale = app()->getLocale() ?? 'en';
        if (!$request->order) {
            $query->orderBy('created_at', 'DESC');
        }
        if (isset($filter)) {
            if (isset($filter['column_status'])) {
                $query->where('status', $filter['column_status']);
            }
        }
        if (auth()->user()->hasAnyRole(['admin'])) {
            $query->withTrashed();
        }
         
        
        return $datatable->eloquent($query)
            ->addColumn('check', function ($row) {
                return '<input type="checkbox" class="form-check-input select-table-row"  id="datatable-row-'.$row->id.'"  name="datatable_ids[]" value="'.$row->id.'" data-type="category" onclick="dataTableRowCheck('.$row->id.',this)">';
            })

            ->editColumn('name', function($query) use($primary_locale){
                $name = $this->getTranslation($query->translations, $primary_locale, 'name', $query->name) ?? $query->name;  
                if (auth()->user()->can('category edit')) {
                    $link = '<a class="btn-link btn-link-hover" href='.route('web.allweb.create', ['id' => $query->id]).'>'.$name.'</a>';
                } else {
                    $link = $name;
                }
                return $link;
            })
            ->filterColumn('name',function($query,$keyword) use($primary_locale){
                if ($primary_locale !== 'en') {
                    $query->where(function ($query) use ($keyword, $primary_locale) {
                        $query->whereHas('translations', function($query) use ($keyword, $primary_locale) {
                                // Search in the translations table based on the primary_locale
                                $query->where('locale', $primary_locale)
                                      ->where('value', 'LIKE', '%'.$keyword.'%');
                            })
                            ->orWhere('name', 'LIKE', '%'.$keyword.'%'); // Fallback to 'name' field if no translation is found
                    });
                } else {
                    $query->where('name', 'LIKE', '%'.$keyword.'%');
                }
               
            })
            ->addColumn('action', function ($data) {
                return view('web.allweb.action', compact('data'))->render();
            })
            ->editColumn('is_featured' , function ($query){
                $disabled = $query->trashed() ? 'disabled': '';

                return '<div class="custom-control custom-switch custom-switch-text custom-switch-color custom-control-inline">
                    <div class="custom-switch-inner">
                        <input type="checkbox" class="custom-control-input  change_status" data-type="shop_featured" data-name="is_featured" '.($query->is_featured ? "checked" : "").'  '.  $disabled.' value="'.$query->id.'" id="f'.$query->id.'" data-id="'.$query->id.'">
                        <label class="custom-control-label" for="f'.$query->id.'" data-on-label="'.__("messages.yes").'" data-off-label="'.__("messages.no").'"></label>
                    </div>
                </div>';
            })
            ->editColumn('status' , function ($query){
                $disabled = $query->trashed() ? 'disabled': '';
                return '<div class="custom-control custom-switch custom-switch-text custom-switch-color custom-control-inline">
                    <div class="custom-switch-inner">
                        <input type="checkbox" class="custom-control-input  change_status" data-type="shop_status" '.($query->status ? "checked" : "").'  '.$disabled.' value="'.$query->id.'" id="'.$query->id.'" data-id="'.$query->id.'">
                        <label class="custom-control-label" for="'.$query->id.'" data-on-label="" data-off-label=""></label>
                    </div>
                </div>';
            })
            ->editColumn('description', function($query) use($primary_locale) {
                $description = $this->getTranslation($query->translations, $primary_locale, 'description', $query->description) ?? $query->description;
            
                return $description ?? '-';
            }) 
            ->rawColumns(['action', 'status', 'check','is_featured','name','description'])
            ->toJson();
    }

    /* bulck action method */
    public function bulk_action(Request $request)
    {
        $ids = explode(',', $request->rowIds);

        $actionType = $request->action_type;

        $message = 'Bulk Action Updated';

        switch ($actionType) {
            case 'change-status':

                $branches =  Webs::whereIn('id', $ids)->update(['status' => $request->status]);
                $message = 'Bulk Web Status Updated';
                break;

            case 'change-featured':
                $branches =  Webs::whereIn('id', $ids)->update(['is_featured' => $request->is_featured]);
                $message = 'Bulk Web Featured Updated';
                break;

            case 'delete':
                 Webs::whereIn('id', $ids)->delete();
                $message = 'Bulk Web Deleted';
                break;

            case 'restore':
                 Webs::whereIn('id', $ids)->restore();
                $message = 'Bulk Web Restored';
                break;

            case 'permanently-delete':
                 Webs::whereIn('id', $ids)->forceDelete();
                $message = 'Bulk Web Permanently Deleted';
                break;

            default:
                return response()->json(['status' => false,'is_featured' => false, 'message' => 'Action Invalid']);
                break;
        }

        return response()->json(['status' => true, 'is_featured' => true, 'message' => $message]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
     {
        if (!auth()->user()->can('category add')) {
            return redirect()->back()->withErrors(trans('messages.demo_permission_denied'));
        }
      
        $id = $request->id;
        $auth_user = authSession();
        $primary_locale = app()->getLocale() ?? 'en';
        $language_array = $this->languagesArray();
        $servicedata = Webs::find($id);
        
       
        $pageTitle = trans('messages.update_form_title',['form'=>trans('messages.webs').' '.trans('messages.list')]);
        if($servicedata == null){
            $pageTitle = trans('messages.add_button_form',['form' => trans('messages.webs').' '.trans('messages.list')]);
            $servicedata = new Webs();
        }
        return view('web.allweb.create', compact('pageTitle' ,'servicedata' ,'auth_user','language_array' ));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // Validation
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'category_id' => 'required|string|max:255',
                'web_link' => 'required|string',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withInput()->with('errors', $validator->errors());
            }

            DB::beginTransaction();

            $loginUserId = Auth::guard('web')->user()->id;

            // If updating
            $data = Webs::find($request->id) ?? new Webs();
            
            // Set data
            $data->name = $request->name;
            $data->user_id = $loginUserId;
            $data->category_id = $request->category_id;
            $data->web_link = $request->web_link;
            $data->status = 1;
            $data->save();

            // File upload (if applicable)
            if ($request->hasFile('web_attachment')) {
                storeMediaFile($data, $request->file('web_attachment'), 'web_attachment');
            } elseif (!$request->id && !getMediaFileExit($data, 'web_attachment')) {
                return redirect()->back()
                    ->withErrors(['web_attachment' => 'The attachments field is required.'])
                    ->withInput();
            }

            DB::commit();

            $message = $request->id ? 'webs updated successfully' : 'webs added successfully';
            return redirect()->route('web.allweb.index')->withSuccess($message);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->with('errors', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(demoUserPermission()){
            return  redirect()->back()->withErrors(trans('messages.demo_permission_denied'));
        }
        $shop = Webs::find($id);

        $msg= __('messages.msg_fail_to_delete',['name' => __('messages.web')] );

        if($shop!='') {
            $shop->delete();
            $msg= __('messages.msg_deleted',['name' => __('messages.web')] );
        }
        if(request()->is('api/*')) {
            return comman_message_response($msg);
		}
        return comman_custom_response(['message'=> $msg , 'status' => true]);
    }
    public function action(Request $request){
        $id = $request->id;
        $shop  = Webs::withTrashed()->where('id',$id)->first();
        $msg = __('messages.t_found_entry',['name' => __('messages.web')] );
        if($request->type == 'restore') {
            $shop->restore();
            $msg = __('messages.msg_restored',['name' => __('messages.web')] );
        }
        if($request->type === 'forcedelete'){
            $shop->forceDelete();
            $msg = __('messages.msg_forcedelete',['name' => __('messages.web')] );
        }
        if(request()->is('api/*')){
            return comman_message_response($msg);
		}
        return comman_custom_response(['message'=> $msg , 'status' => true]);
    }


    public function check_in_trash(Request $request)
    {
        $ids = $request->ids;
        $type = $request->datatype;

        switch($type){
            case 'category':
                $InTrash = Webs::withTrashed()->whereIn('id', $ids)->whereNotNull('deleted_at')->get();
            break;
            case 'subcategory':
                $InTrash = SubCategory::withTrashed()->whereIn('id', $ids)->whereNotNull('deleted_at')->get();
            break;
            case 'service':
                $InTrash = Service::withTrashed()->whereIn('id', $ids)->whereNotNull('deleted_at')->get();
            break;
            case 'servicepackage':
                $InTrash = ServicePackage::withTrashed()->whereIn('id', $ids)->whereNotNull('deleted_at')->get();
            break;
            case 'booking':
                $InTrash = Booking::withTrashed()->whereIn('id', $ids)->whereNotNull('deleted_at')->get();
            break;
            case 'user':
                $InTrash = User::withTrashed()->whereIn('id', $ids)->whereNotNull('deleted_at')->get();
            break;
            case 'providertype':
                $InTrash = ProviderType::withTrashed()->whereIn('id', $ids)->whereNotNull('deleted_at')->get();
            break;
            case 'providerdocument':
                $InTrash = ProviderDocument::withTrashed()->whereIn('id', $ids)->whereNotNull('deleted_at')->get();
            break;
            case 'coupon':
                $InTrash = Coupon::withTrashed()->whereIn('id', $ids)->whereNotNull('deleted_at')->get();
            break;
            case 'slider':
                $InTrash = Slider::withTrashed()->whereIn('id', $ids)->whereNotNull('deleted_at')->get();
            break;
            case 'document':
                $InTrash = Documents::withTrashed()->whereIn('id', $ids)->whereNotNull('deleted_at')->get();
            break;
            case 'blog':
                $InTrash = Blog::withTrashed()->whereIn('id', $ids)->whereNotNull('deleted_at')->get();
            break;
            case 'notificationtemplate':
                $InTrash = NotificationTemplate::withTrashed()->whereIn('id', $ids)->whereNotNull('deleted_at')->get();
            break;

            default:
            break;
        }

        if (count($InTrash) === count($ids)) {
            return response()->json(['all_in_trash' => true]);
        }

        return response()->json(['all_in_trash' => false]);
    }
}
