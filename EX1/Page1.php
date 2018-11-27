<?php
require_once 'public/header.php';

?>
<body class="bg-info">
    <div class="container-fluid col-md-5 offset-md-3">
    <div class="row">
        <div class="card mt-0">
            <p id="welcomeHead">Welcome to treasure hunt please click a box to find out if you have won.</p>
            <table style="width:100%" border=5>
  <tr>
      <td id="0"><img src="public/images/box.jpg" style="width:50px;height:60px;"></th>
    <td id="1"><img src="public/images/box.jpg" style="width:50px;height:60px;"></th> 
    <td id="2"><img src="public/images/box.jpg" style="width:50px;height:60px;"></th>
  </tr>
  <tr>
      <td id="3"><img src="public/images/box.jpg" style="width:50px;height:60px;"></td>
      <td id="4"><img src="public/images/box.jpg" style="width:50px;height:60px;"></td> 
      <td id="5"><img src="public/images/box.jpg" style="width:50px;height:60px;"></td>
  </tr>
  <tr>
      <td id="6"><img src="public/images/box.jpg" style="width:50px;height:60px;"></td>
      <td id="7"><img src="public/images/box.jpg" style="width:50px;height:60px;"></td> 
      <td id="8"><img src="public/images/box.jpg" style="width:50px;height:60px;"></td>
  </tr>
</table> 
        </div>
    </div>
        <div class="row">
        <div class="card mt-2">
            <div id="status">Connecting...</div>
            <ul id="messages"></ul>
    <form id="message-form" action="#" method="post">
      <textarea id="message" placeholder="Write your message here..." required></textarea>
      <button type="submit">Send Message</button>
      <button type="button" id="close">Close Connection</button>
    </form>
        </div>
    </div>
    </div>
 <?php include_once 'public/footer.php'; ?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

