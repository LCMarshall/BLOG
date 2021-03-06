@extends('layouts.master')

@section('title')
Lori Contreras Marshall
@stop

@section('topscript')
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>   
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/resume.css">
    
@stop


@section('content')
    
    <div class="container-fluid">
        <h1>Lori Contreras Marshall</h1>
        <div class="row boxes">
          <div class="col-md-4" class="box" id="box">
            <p>
              <br>210-748-1095
              <br>lorettamarshall123@yahoo.com
              <br>@LCMarshall123<br>
              <a href="http://github.com/LCMarshall">GitHub LCMarshall</a>
              <br><a href="http://www.linkedin.com/in/lorettamarshall123/">LinkedIn</a>
            </p>
          </div>
          <div class="col-md-8">
            <h3></h3>
            <p>"I am always ready and willing to give projects or tasks 100%. 
              I believe in going the extra mile, and ensuring the job is done right."</p>
            
            <h3>Experience and Technical Skills</h3>
              <p>Acquired knowledge in programming and web development through courses taken at Codeup.</p>
              <ul>
                  <li>Linux</li>
                  <li>Apache</li>
                  <li>MySQL</li>
                  <li>PHP</li>
                  <li>Client-side JavaScript</li>
                  <li>Laravel framework</li>
                  <li>jQuery</li>
                  <li>HTML</li>
                  <li>CSS</li>
                  <li>Twitter Bootstrap</li>
                  <li>GitHub</li>
              </ul>  
            <h3>Student Projects</h3>
            <ul class="project">
              <li>Portfolio and Blog: Created a professional portfolio and blog utilizing PHP, 
                JavaScript, jQuery, MySQL, and the Laravel framework. Functionality includes the capability
                to create a blog post, delete a blog post, and update as well as the ability to comment.</li>
              <li >Guac-A-Mole: Utilized PHP, JavaScript, and jQuery to create
                a game based on the classic Whack-A-Mole game. The functionality of the
                game included the ability to start with the click of a button, stop via 
                a timer, and the capacity to keep score.</li>
              <li>Address Book: Utilized PHP, JavaScript, jQuery, and MySQL to develop a contact
                management system. The functionality includes the capability to add new contacts,
                delete contacts, and also update the database.</li> 
              <li>Todo List: Utilized PHP, JavaScript, jQuery, and MySQL to develop a task
                management system. The functionality includes the capability to add new tasks,
                delete tasks, and also update the database.</li>    
            </ul>               
          </div>
        </div>  
        <div class="row boxes">
          <div class="col-md-4"></div>
          <div class="col-md-8">
             <h3>Education</h3>
            <h5>Concordia University</h5>
            <p>Master of Education in Leadership, GPA: 4.0</p>
            <h5>University of Phoenix</h5>
            <p>Bachelor of Science in Business Management, GPA: 3.81</p>



            <h3>Work Experience</h3>
            <p></p>
            <p>Freelance Web Developer</p>
            <p><em>May 2014-Present</em></p>
              Created websites for small businesses, working on the entire process of web development, 
              including planning, designing/developing, troubleshooting, 
              debugging and implementing software code for website components.
              <br>
              <br>

            <p>John Paul Stevens High School</p>
            <p><em>San Antonio, TX, August 2009-December 2013</em></p>

              Developed and implemented differentiated instruction that encouraged critical thinking,  
              Tracked and analyzed student performance,          
              Created opportunities for peer teaching and cooperative learning, 
              Conducted conferences with students, parents, other teachers, and staff to ensure student success,              
              Increased number of students participating in the college readiness assessment from the lowest in the district to the third highest in the district,
              Interviewed students and coordinated testing to ensure specific requirements were met,
              Coordinated all pertinent data and information with Northwest Vista College and the University of Texas at San Antonio to ensure students were properly entered and enrolled into each program,
              Created and prepared reports for internal and external use,
              Conducted parent information sessions,
              New Teacher Campus Mentor,
              Organized duty schedules,
              Developed and facilitated staff development,
              Organized and launched after school peer tutoring program,
              Encouraged technology in learning
             
          </div>
            
        </div>  
        <div class="row boxes">
          <div class="col-md-4"></div>
          <p></p><br>
          <div class="col-md-8"></div>
          <p></p><br>
        </div>
    </div> 
@stop       
        