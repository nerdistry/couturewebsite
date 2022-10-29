<?php
header('Content-type: text/css; charset:UTF-8');
?>
*{
margin:0;
padding:0;
}
body {
font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
color: #262626;
margin: 5% 0;
}

.container {
width: 100%;
padding-right: 15px;
padding-left: 15px;
margin-right: auto;
margin-left: auto;
}


/*
@media (min-width: 1200px) {
.container {
max-width: 1140px;
}
} */

.d-flex {
display: flex;
flex-direction: row;
background: #f6f6f6;
border-radius: 0 0 5px 5px;
padding: 25px;
}

form {
flex: 4;
}

.Yorder {
flex: 2;
}

.title {
background: -webkit-gradient(linear, left top, right bottom, color-stop(0, #f5f5f5), color-stop(100, #f5f5f5));
background: -moz-linear-gradient(top left, #f5f5f5 0%, #f5f5f5 100%);
background: -ms-linear-gradient(top left, #f5f5f5 0%, #f5f5f5 100%);
background: -o-linear-gradient(top left, #f5f5f5 0%, #f5f5f5 100%);
background: linear-gradient(to bottom right, #f5f5f5 0%, #f5f5f5 100%);
border-radius: 5px 5px 0 0;
padding: 20px;
color: black;
}

h2 {
margin-top: 0;
margin-bottom: 0;
padding-left: 15px;
}

.required {
color: red;
}

label,
table {
display: block;
margin: 15px;
}

label>span {
float: left;
width: 25%;
margin-top: 12px;
padding-right: 10px;
}

input[type="text"],
input[type="tel"],
input[type="email"],
select {
width: 70%;
height: 30px;
padding: 5px 10px;
margin-bottom: 10px;
border: 1px solid #dadada;
color: #888;
}

select {
width: 72%;
height: 45px;
padding: 5px 10px;
margin-bottom: 10px;
}

.Yorder {
margin-top: 15px;
height: 600px;
padding: 20px;
border: 1px solid #dadada;
}

table {
margin: 0;
padding: 0;
}

th {
border-bottom: 1px solid #dadada;
padding: 10px 0;
}

tr>td:nth-child(1) {
text-align: left;
color: #2d2d2a;
}

tr>td:nth-child(2) {
text-align: right;
color: #535252;
}

td {
border-bottom: 1px solid #dadada;
padding: 25px 25px 25px 0;
}

p {
display: block;
color: #888;
margin: 0;
padding-left: 25px;
}

.Yorder>div {
padding: 15px 0;
}

button {
width: 100%;
margin-top: 10px;
padding: 10px;
border: none;
border-radius: 30px;
background: #888;
color: #fff;
font-size: 15px;
font-weight: bold;
}

button:hover {
cursor: pointer;
background: #757474;
}