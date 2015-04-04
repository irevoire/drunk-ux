html {
  box-sizing: border-box; }

*, *:before, *:after {
  box-sizing: inherit; }

body {
  margin: 0;
  padding: 0;
  background: #fff;
  font-family: "Raleway", sans-serif;
  text-shadow: 0 1px 0 #fff;
  overflow: hidden;
  background: url("../images/dist/noise.png") #E4F1FE; }

img {
  max-width: 100%;
  border: 0;
  vertical-align: bottom; }

.header{
  padding: 20px;
  background: url("../images/dist/noise.png") #E4F1FE;
  color: #333;
  height: 100px; }
  .header:after{
    content: "";
    display: table;
    clear: both; }

.header {
  border-bottom: 5px solid #b3d7fc; }
  .header .left {
    width: auto;
    float: left;
    height: 100%; }
    .header .left .logo {
      position: relative;
      top: 50%;
      -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
              transform: translateY(-50%);
      width: 30px;
      float: left;
      display: block; }
    .header .left h1 {
      float: left;
      font-family: "Lobster", cursive;
      position: relative;
      top: 50%;
      -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
              transform: translateY(-50%);
      margin: 0;
      padding: 0;
      padding: 0 20px 0 10px;
      color: #9acbfb;
      font-size: 2.2em; }
  .header .right {
    width: auto;
    float: left;
    height: 100%;
    border-left: 1px solid rgba(0, 0, 0, 0.05);
    padding: 0 0 0 20px; }
    .header .right form {
      position: relative;
      top: 50%;
      -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
              transform: translateY(-50%); }

input {
  vertical-align: middle;
  margin: 0;
  padding: 0;
  border: 0;
  padding: 10px;
  border-radius: 3px;
  font-family: 'courier';
  max-width: 450px;
  display: inline-block; }

button {
  box-shadow: none;
  padding: 10px 20px;
  font-family: 'courier';
  border: 0;
  color: #333;
  cursor: pointer;
  background: lightgrey;
  border-radius: 3px; }

.drunk {
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#FFE4F1FE', endColorstr='#FF82BEFA');
  background: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2U0ZjFmZSIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2IzZDdmYyIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background: linear-gradient(#e4f1fe, #b3d7fc);
  box-shadow: white 0 1px 0 inset;
  border: 1px solid #9acbfb;
  color: white;
  text-shadow: #64aff9 0 -1px 0;
  float: right;
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
          transform: translateY(-50%);
  padding: 20px;
  color: #333;
  text-shadow: 0 1px 0 white;
  border-radius: 10px;
  cursor: pointer;
  text-transform: uppercase; }

iframe {
  width: 100%;
  border: 0;
  vertical-align: bottom;
  position: relative; }