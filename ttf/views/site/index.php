<?php

/** @var yii\web\View $this */

use yii\bootstrap5\Html;

$this->title = 'Type Factor';
?>
<div class="site-index">

    <section class="banner-index">
        <div class="row-primary">
            <div class="banner-about">
                <h1>Type Factor</h1>
                <button><a href="#">Hire Us</a></button>
            </div>

            <div class="about-bar">
                <ul>
                    <li><a href="#">An Easy Process</a></li>
                    <li><a href="#">The Best Value</a></li>
                    <li><a href="#">Griefling & Heading</a></li>
                    <li><a href="#">PreArragaments</a></li>
                </ul>
            </div>
            
        </div>
    </section>

    <section class="solutions-index">
        <div class="row-primary">
            <div class="solutions-title">
                <div class="line-blue">

                </div>
                <h2>SOLUCIONES</h2>
                <div class="line-blue">

                </div>
            </div>
        </div>
        <div class="row-primary">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
        </div>
        <div class="row-primary">
            <div class="solution-item">
                <?= Html::img('@web/images/logo.png', ['alt' => 'My logo', 'class'=> 'solution-icon']) ?>
                <h3>Inteligencia Relacional<br>RQ 101</h3>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum laboriosam aspernatur ipsum et eligendi voluptatum est consectetur quia necessitatibus libero cupiditate.</P>
            </div>
            <div class="solution-item">
                <?= Html::img('@web/images/logo.png', ['alt' => 'My logo', 'class'=> 'solution-icon']) ?>
                <h3>RQ Para Liderazgo</h3>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum laboriosam aspernatur ipsum et eligendi voluptatum est consectetur quia necessitatibus libero cupiditate.</P>
            </div>
            <div class="solution-item">
                <?= Html::img('@web/images/logo.png', ['alt' => 'My logo', 'class'=> 'solution-icon']) ?>
                <h3>RQ Para Equipos</h3>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum laboriosam aspernatur ipsum et eligendi voluptatum est consectetur quia necessitatibus libero cupiditate.</P>
            </div>
            <div class="solution-item">
                <?= Html::img('@web/images/logo.png', ['alt' => 'My logo', 'class'=> 'solution-icon']) ?>
                <h3>RQ Para Mujeres <br>Líderes</h3>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum laboriosam aspernatur ipsum et eligendi voluptatum est consectetur quia necessitatibus libero cupiditate.</P>
            </div>
        </div>


    </section>

    <section class="logos">
        <div class="row-primary">
            <p>HAN CONFIADO EN NOSOTROS</p>
        </div>
        <div class="row-primary">

        </div>
    </section>

    <section class="testimonials-index">
        <div class="row-primary">
            <h2>TESTIMONIOS</h2>
            <div class="line-white">

            </div>
        </div>
    </section>

    <section class="sevices-index">
        <div class="row-primary">
            <div class="services-title">
                <div class="line-blue">

                </div>
                <h2>SERVICIOS</h2>
                <div class="line-blue">

                </div>
            </div>
        </div>
        <div class="row-primary">
            <div class="service-item">
                <?= Html::img('@web/images/logo.png', ['alt' => 'My logo', 'class'=> 'service-icon']) ?>
                <h3>Servicio 1</h3>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum laboriosam aspernatur ipsum et eligendi voluptatum est consectetur quia necessitatibus libero cupiditate.</P>
            </div>
            <div class="service-item">
                <?= Html::img('@web/images/logo.png', ['alt' => 'My logo', 'class'=> 'service-icon']) ?>
                <h3>Servicio 2</h3>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum laboriosam aspernatur ipsum et eligendi voluptatum est consectetur quia necessitatibus libero cupiditate.</P>
            </div>
            <div class="service-item">
                <?= Html::img('@web/images/logo.png', ['alt' => 'My logo', 'class'=> 'service-icon']) ?>
                <h3>Servicio 3</h3>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum laboriosam aspernatur ipsum et eligendi voluptatum est consectetur quia necessitatibus libero cupiditate.</P>
            </div>
            <div class="service-item">
                <?= Html::img('@web/images/logo.png', ['alt' => 'My logo', 'class'=> 'service-icon']) ?>
                <h3>Servicio 4</h3>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum laboriosam aspernatur ipsum et eligendi voluptatum est consectetur quia necessitatibus libero cupiditate.</P>
            </div>
        </div>
    </section>
    
</div>
