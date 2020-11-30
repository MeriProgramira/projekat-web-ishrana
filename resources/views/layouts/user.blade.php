<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    {{-- Google fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;500;600&family=Poppins:wght@300;400;600&family=Roboto:ital,wght@0,300;0,400;0,500;1,700&display=swap" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/mypjlpl0ll198jkom1nivwr7g17mj8g5oefvob9eqey6bvy5/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Zdrava ishrana </title>
</head>
<body>

    @include('partials.nav_dashboard')

    @yield('content_user')

    @yield('style_user')


     <!-- jQuery and JS bundle w/ Popper.js -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
     <script>
             tinymce.init({
               selector: 'textarea',
               plugins: [ "advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste hr" ],
             toolbar: "insertfile undo redo | formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | blockquote hr | bullist numlist outdent indent | link image"
             });
     </script>
</body>
</html>
