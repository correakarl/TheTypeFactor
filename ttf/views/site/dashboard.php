<?php

/** @var yii\web\View $this */

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="sidebar close">
  <div class="logo-details">
    <i class='bx bx-chevron-right ttf-side-btn' ></i>
    <i class='fa-solid fa-house ttf-side-log'></i>
    <span class="logo_name">Resume</span>
  </div>
  <ul class="nav-links">
    <li>
      <a href="#">
        <i class='fa-solid fa-sliders' ></i>
        <span class="link_name">Estado de cuenta</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Estado de cuenta</a></li>
      </ul>
    </li>
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-collection' ></i>
          <span class="link_name">Category</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Category</a></li>
        <li><a href="#">HTML & CSS</a></li>
        <li><a href="#">JavaScript</a></li>
        <li><a href="#">PHP & MySQL</a></li>
      </ul>
    </li>
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-book-alt' ></i>
          <span class="link_name">Posts</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Posts</a></li>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">Login Form</a></li>
        <li><a href="#">Card Design</a></li>
      </ul>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-pie-chart-alt-2' ></i>
        <span class="link_name">Analytics</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Analytics</a></li>
      </ul>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-line-chart' ></i>
        <span class="link_name">Chart</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Chart</a></li>
      </ul>
    </li>
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-plug' ></i>
          <span class="link_name">Plugins</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Plugins</a></li>
        <li><a href="#">UI Face</a></li>
        <li><a href="#">Pigments</a></li>
        <li><a href="#">Box Icons</a></li>
      </ul>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-compass' ></i>
        <span class="link_name">Explore</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Explore</a></li>
      </ul>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-history'></i>
        <span class="link_name">History</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">History</a></li>
      </ul>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-cog' ></i>
        <span class="link_name">Setting</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Setting</a></li>
      </ul>
    </li>
    
  </ul>
</div>

<section class="dashboard-section">
  <div class="dashboard-content">
    <div class="dashboard-title">
      <p class="dashboard-head">Bienvenido<i class="fa-regular fa-hand"></i> </p>
    </div>
    <div class="dashboard-row">
      <input type="text">
    </div>
  </div>
</section>