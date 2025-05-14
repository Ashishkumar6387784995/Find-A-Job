<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Job Application Process</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      padding: 20px;
      background-color: #f0f2f5;
    }
    h1 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 40px;
    }

    .timeline {
      position: relative;
      margin-left: 30px;
      padding-left: 30px;
      border-left: 3px solid #3498db;
    }

    .step {
      position: relative;
      margin-bottom: 30px;
      background-color: #fff;
      padding: 20px 25px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.07);
    }

    .step::before {
      content: attr(data-step);
      position: absolute;
      left: -47px;
      top: 20px;
      background-color: #3498db;
      color: white;
      width: 30px;
      height: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      font-weight: bold;
    }

    h2 {
      margin-top: 0;
      color: #2c3e50;
      font-size: 1.2rem;
    }

    ul {
      margin: 10px 0 0 20px;
    }

    p {
      margin: 0;
    }
  </style>
</head>
<body>
  <h1>Job Application Process</h1>
  <div class="timeline">

    <div class="step" data-step="1">
      <h2>Application Confirmation</h2>
      <p>You’ll usually get an email or on-site confirmation message saying your application was received. Some portals show your application status (e.g., “Applied,” “Under Review”).</p>
    </div>

    <div class="step" data-step="2">
      <h2>Resume Screening</h2>
      <p>The HR team or an automated system (ATS - Applicant Tracking System) reviews your resume. They check if your skills and experience match the job requirements.</p>
    </div>

    <div class="step" data-step="3">
      <h2>Application Status Update (on the portal)</h2>
      <ul>
        <li><input type="checkbox"> Under Review</li>
        <li><input type="checkbox"> Shortlisted</li>
        <li><input type="checkbox"> Rejected</li>
        <li><input type="checkbox"> Interview Scheduled</li>
      </ul>
    </div>

    <div class="step" data-step="4">
      <h2>Initial Contact</h2>
      <p>If shortlisted, you might receive:</p>
      <ul>
        <li><input type="checkbox"> An email</li>
        <li><input type="checkbox"> A phone call</li>
        <li><input type="checkbox"> A message via the job portal or LinkedIn</li>
      </ul>
    </div>

    <div class="step" data-step="5">
      <h2>Interview Process</h2>
      <ul>
        <li><input type="checkbox"> Phone/Video Screening</li>
        <li><input type="checkbox"> Online Assessment/Test</li>
        <li><input type="checkbox"> Technical/HR Interviews</li>
        <li><input type="checkbox"> On-site Interview (if required)</li>
      </ul>
    </div>

    <div class="step" data-step="6">
      <h2>Feedback or Final Decision</h2>
      <ul>
        <li><input type="checkbox"> A Job Offer</li>
        <li><input type="checkbox"> A Rejection</li>
        <li><input type="checkbox"> No response (sadly, that happens too)</li>
      </ul>
    </div>

    <div class="step" data-step="7">
      <h2>Offer Letter & Onboarding</h2>
      <p>If selected, the company sends you an offer letter and onboarding instructions.</p>
    </div>

  </div>
</body>
</html>