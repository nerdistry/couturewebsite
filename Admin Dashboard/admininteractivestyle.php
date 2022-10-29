<?php
header('Content-type: text/css; charset:UTF-8');
?>
:root {
--main-color: white;
--color-dark: black;
--text-grey: #8390A2;
}

* {
padding: 0;
margin: 0;
box-sizing: border-box;
list-style-type: none;
text-decoration: none;
font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.sidebar {
width: 345px;
position: fixed;
left: 0;
top: 0;
height: 100%;
background: var(--main-color);
z-index: 100%;
}

.sidebar-brand {
height: 90px;
padding: 1rem 0rem 1rem 2rem;
}

.sidebar-brand span {
display: inline-block;
padding-right: 1rem;
}

.sidebar-menu {
margin-top: 1rem;
}

.sidebar-menu li {
width: 100%;
margin-bottom: 1.7rem;
padding-left: 1rem;
}

.sidebar-menu a {
padding-left: 1rem;
display: block;
color: black;
font-size: 1.1 rem;
}

.sidebar-menu a.active {
background: grey;
padding-top: 1rem;
padding-bottom: 1rem;
color: var(--main-color);
border-radius: 30px 0px 0px 30px;
}

.sidebar-menu a span:first-child {
font-size: 1.5rem;
padding-right: 1rem;
}

.main-content {
margin-left: 345px;
}

header {
display: flex;
justify-content: space-between;
padding: 1rem 1.5rem;
box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.2);
position: fixed;
left: 345px;
width: calc(100% - 345px);
top: 0%;
z-index: 100;
}

header h2 {
color: #222
}

header label span {
font-size: 1.7rem;
padding-right: 1rem;
}

.search-wrapper {
border: 1px solid rgb(122, 119, 119);
border-radius: 30px;
height: 50px;
display: flex;
align-items: center;
overflow-x: hidden;
}

.search-wrapper span {
display: inline-block;
padding: 0rem 1rem;
font-size: 1.5rem;
}

.search-wrapper input {
height: 100%;
padding: .5rem;
border: none;
outline: none;
}

.user-wrapper {
display: flex;
align-items: center;
}

.user-wrapper img {
border-radius: 50%;
margin-right: 1rem;
}

.user-wrapper small {
display: inline-block;
color: var(--text-grey);
}

main {
margin-top: 89px;
padding: 2rem 1.5rem;
background: #f1f5f9;
min-height: calc(100vh - 90px);
}

.cards {
display: grid;
grid-template-columns: repeat(4, 1fr);
grid-gap: 2rem;
margin-top: 1rem;
}

.card-single {
display: flex;
justify-content: space-between;
background: #fff;
padding: 2rem;
border-radius: 2px;
}

.card-single div:last-child span {
font-size: 3rem;
color: black;
}

.card-single div:first-child span {
color: var(--text-grey);
}

.card-single:last-child {
background: grey;
}

.card-single:last-child h1,
.card-single:last-child div:first-child span.card-single:last-child div:last-child span {
color: #fff;
}

.recent-grid {
margin-top: 3.5rem;
display: grid;
grid-gap: 2rem;
grid-template-columns: 67% auto;
}

.card {
background: #fff;
border-radius: 5px;
}

.card-header,
.card-body {
padding: 1rem;
}

.card-header {
display: flex;
justify-content: space-between;
align-items: center;
border-bottom: 1px solid #f0f0f0;
}

.card-header button {
background: grey;
border-radius: 10px;
color: #fff;
padding: .5rem 1rem;
font-size: .8rem;
border: 1px solid grey;
}

table {
border-collapse: collapse;
}

thead tr {
border: 1px solid #f0f0f0;
}