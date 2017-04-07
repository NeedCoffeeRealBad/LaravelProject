<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="./css/custom.css">
         <title>Go for it </title>
         <style>
        *
        {
            margin: 0px;
            padding: 0px;
        }
        
        body
        {
            font-family: verdana;
            padding: 50px;
        }
        
        
        ul#navmenu, ul.sub1, ul.sub2, ul.sub2a
        {
            list-style-type: none;
            font-size: 16pt;
        }
        
        ul#navmenu li 
        {
        background-color: #FFF; 
        text-align:center;
        width:220px;
        position:relative;
        background-color: #FFF;
        border: 1px solid #CCC;
            border-radius: 5px;
        float:left; 
        margin-right: 7px;  /* разтояние между бутоните */
        }
    
        
        ul#navmenu .sub2a
        {
            margin-left: 15px;
        }
        
        ul#navmenu li:hover
        {
            background-color:#CFC
        }
        
        ul#navmenu ul.sub1
        {
            display:none;
            position:absolute
        }
        
        ul#navmenu ul.sub2
        {
            display:none;
            position:absolute
        }
        
        ul#navmenu ul.sub2a
        {
            display:none;
            position:absolute
        }
        
        ul#navmenu li:hover .sub1
        {
            display:block;
        }
        
        ul#navmenu li:hover .sub2
        {
            display:block;
        }
        
        ul#navmenu .sub2 li:hover .sub2a /* тва кара подменюто в подменюто да работи */
        {
            display:block;
        }
        
        .darrow
        {
            font-size: 14pt;
            position:absolute;
            
        }

        body
        {
            background:url(bootstrap-3.3.7-dist/css/banana.gif);  
        }

    </style>
    

</head>
<body>
<div>
    <ul id = "navmenu"> 
        <li> <a href="#"> random 1 </li> 

        <li> <a href="#"> dropdown 2 </a> <span class = "darrow">&#9660 </span>
            <ul class = "sub1">
                <li> <a href="#"> dropdown 2.1 </li> </a>
                <li> <a href="#"> dropdown 2.2 </li> </a>
                <li> <a href="#"> dropdown 2.3 </li> </a>       
        </li>   
            </ul>

        <li> <a href="/login"> Log in </li> </a>

        <li> <a href="/register"> Register </li> </a>

        <li> <a href="#"> dropdown 3 </a> <span class = "darrow">&#9660 </span>
            <ul class = "sub2">
                <li> <a href="#"> dropdown 3.1 </li> </a>
                <li> <a href="#"> dropdown 3.2 </li> </a>
                <li> <a href="#"> dropdown 3.3 </a> <span class = "darrow">&#9660 </span>
                    <ul class = "sub2a">
                        <li> <a href="#"> dropdown 3.3.1 </a>
                        <li> <a href="#"> dropdown 3.3.2 </a>
                        <li> <a href="#"> dropdown 3.3.3 </a>
                    </ul>
            </ul>
        <li>
    
    </ul>
</div>
</body>
</html>

        
    