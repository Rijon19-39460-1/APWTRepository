<html>
    <head>
        <title>Laravel App</title>
        <style>
form {
  border-radius: 30px;
  position: relative;
  z-index: 1;
  background: white;
  max-width: 600px;
  margin: auto;
  padding: 100px;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 8px 5px 0 rgba(0, 0, 0, 0.24);
}
fieldset{
  border-radius: 20px;
}
h1{
  text-align: center;
}

input{
  padding: 8px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
select{
  padding: 8px 18px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
span {
  color: red;
}
#heading{
 background-color:#339933;
 box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 8px 5px 0 rgba(0, 0, 0, 0.24);
 height: 55px;

 }
 #heading a{
 float:right;
 display:block;
 color:white;
 text-align:center;
 padding:18px 16px;
 text-decoration:none;
 opacity: 0.8;
 transition: 0.8s;
 cursor: pointer;
 }
 #heading a:hover
 { opacity: 1;
 background-color:#4444ab;
 color:white;
 }
.sub{
  border-radius: 30px;
  width: 100%;
  background-color: #339933;
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  font-size: 18px;
  opacity: 0.8;
  transition: 0.4s;
  cursor: pointer;
}
.sub:hover {opacity: 1;}
}

        </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    </head>
    <body>
            @include('navbar.navbar')
            <div>
                @yield('content')
            </div>
    </body>
</html>