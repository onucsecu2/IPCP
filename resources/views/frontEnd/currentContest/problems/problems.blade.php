@extends('frontEnd.master')
@section('title')
	IPCP-2017
@endsection

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <title>Problems</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('currentContest/problems')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('currentContest/problems')}}/css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	

    <div id="wrapper">



        <!-- Sidebar -->
        <div id="sidebar-wrapper">
        
        	

            <ul class="sidebar-nav">
            	<li>

            	</li>
                <li>
                    <a href="{{url('/current-contest/problems')}}">Dashboard</a>
                </li>
                <li>
                    <a href="https://uva.onlinejudge.org/external/116/11631.pdf" target="iframe_a">Problem A</a>
                </li>
                <li>
                    <a href="https://uva.onlinejudge.org/external/5/543.pdf" target="iframe_a"> Problem B</a>
                </li>
                <li>
                    <a href="https://uva.onlinejudge.org/external/103/10394.pdf" target="iframe_a"> Problem C</a>
                </li>
                <li>
                    <a href="https://uva.onlinejudge.org/external/1/108.pdf" target="iframe_a"> Problem D</a>
                </li>
            </ul> 

        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
      
        <!-- /#page-content-wrapper -->
          <div id="page-content-wrapper">
              <iframe src="" name="iframe_a" height="600px" width="100%"></iframe>
          </div>

    </div>


    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('currentContest/problems')}}/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('currentContest/problems')}}/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->


</body>
@section('homeIntro')

</html>

@endsection
