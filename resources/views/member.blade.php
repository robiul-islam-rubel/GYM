<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>All Members</title>
</head>
<body>
   <div class="main-container">
     <h1>Total Members</h1>
     <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Admission_Year</th>
            <th scope="col">Session_Name</th>
            <th scope="col">Package</th>
            <th scope="col">Source</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($data as $member)
             <tr>
                <td>{{$member->id}}</td>
                <td>{{$member->name}}</td>
                <td>{{$member->phone}}</td>
                <td>{{$member->email}}</td>
                <td>{{$member->admission_year}}</td>
                @if($member->session_name==1) {

                    <td>Morning Session ( 7:00 AM - 10:00 AM )</td>
                }
                @elseif($member->session_name==2) {

                    <td>Noon Session ( 12:00 PM - 2:00 PM )</td>
                }
                @elseif($member->session_name==3) {

                    <td>Evening Session ( 5:00 PM - 7:30 PM )</td>
                }
               @elseif($member->session_name==4) {

                    <td>Night Session ( 9:00 PM - 10:30 PM )</td>
                }  
                @endif  
                @if($member->package_id==1) {

                    <td>Weekly ( 500 BDT )</td>
                }
                @elseif($member->package_id==2) {

                    <td>Monthly ( 1500 BDT )</td>
                }
                @elseif($member->package_id==3) {

                    <td>Yearly ( 10000 BDT )</td>
                }
                @endif
                @if($member->source_id==1) {
                    
                    <td>Alumni</td>
                }
                @elseif($member->source_id==2) {
                    <td>Social Media</td>
                }
                @endif
             </tr>
         @endforeach
        </tbody>
      </table>
   </div>
</body>
</html>