<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
    <!-- input the menubar data here -->
    {menudata}    
    <!-- treat every data input as a link -->
    <li><a href="{link}">{name}</a></li>
    {/menudata}
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">User Role<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="/roles/actor/guest">Guest</a></li>
        <li><a href="/roles/actor/boss">Boss</a></li>
        <li><a href="/roles/actor/supervisor">Supervisor</a></li>
        <li><a href="/roles/actor/worker">Worker</a></li>
      </ul>
    </li>
    </ul>
  </div>
</nav>