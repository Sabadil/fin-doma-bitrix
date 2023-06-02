<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/_dist/js/app.js");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/_dist/css/app.css");
?>
<!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" /> 	
	</head>
	<body>
	<header>
          <div class="header">
            <div class="header-left">
              <a href="/">
                <img src="<?=SITE_TEMPLATE_PATH?>/assets/_dist/images/logo-header.svg" alt="logo-header">
              </a>
              <div class="header-location">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.7148 13.8808L11.179 17.4167C11.0244 17.5714 10.8407 17.6942 10.6386 17.778C10.4365 17.8618 10.2199 17.9049 10.0011 17.9049C9.78228 17.9049 9.56563 17.8618 9.36352 17.778C9.1614 17.6942 8.97778 17.5714 8.82315 17.4167L5.28649 13.8808C4.35417 12.9485 3.71927 11.7606 3.46206 10.4674C3.20485 9.17419 3.3369 7.83376 3.84149 6.61561C4.34608 5.39745 5.20057 4.35628 6.29689 3.62375C7.39321 2.89123 8.68212 2.50024 10.0007 2.50024C11.3192 2.50024 12.6081 2.89123 13.7044 3.62375C14.8007 4.35628 15.6552 5.39745 16.1598 6.61561C16.6644 7.83376 16.7964 9.17419 16.5392 10.4674C16.282 11.7606 15.6471 12.9485 14.7148 13.8808V13.8808Z" stroke="#D85140" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M11.7678 10.9344C12.2366 10.4656 12.5 9.82971 12.5 9.16667C12.5 8.50363 12.2366 7.86774 11.7678 7.3989C11.2989 6.93006 10.663 6.66667 10 6.66667C9.33696 6.66667 8.70107 6.93006 8.23223 7.3989C7.76339 7.86774 7.5 8.50363 7.5 9.16667C7.5 9.82971 7.76339 10.4656 8.23223 10.9344C8.70107 11.4033 9.33696 11.6667 10 11.6667C10.663 11.6667 11.2989 11.4033 11.7678 10.9344Z" stroke="#D85140" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <a href="/">В Костроме и Костромской области</a>
              </div>
            </div>
            <div class="header-right">
              <div class="header-mobile">
                <a href="tel:+79203849184">+7 (920) 384 91 84</a>
                <p>Без выходных: 9:00-18:00</p>
              </div>
              <button class="header-button">
                ЗАКАЗАТЬ ЗВОНОК
              </button>
              <div x-data="{ open: false }" class="header-burger">
                <button @click="open = !open" class="burger-menu">
                  <span></span>
                  <span></span>
                  <span></span>
                    </button>
                    <div x-show="open" @click.away="open = false" @keydown.escape.window="open = false" class="menu-items" x-transition:enter.duration.300ms x-transition:leave.duration.300ms>
                        <div class="open-menu-close_btn">
                          <button @click="open = false">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path d="M6 6L18 18M6 18L18 6L6 18Z" stroke="#2E3F65" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                          </button>
                        </div>
                          <div class="burger-items">
                              <p>В Костроме и Костромской области</p>
                              <li class=menu-item>
                                  <a class="menu-item_link" @click="open = false" href="#about">О нас</a>
                              </li>
                              <li class=menu-item>
                                  <a class="menu-item_link" @click="open = false" href="#our-projects">Проекты</a>
                              </li>
                              <li class=menu-item>
                                  <a class="menu-item_link" @click="open = false" href="#">Преимущества</a>
                              </li>
                              <li class=menu-item>
                                  <a class="menu-item_link" @click="open = false" href="#">Технологии</a>
                              </li>
                              <li class=menu-item>
                                  <a class="menu-item_link" @click="open = false" href="#">Производство</a>
                              </li>
                              <li class=menu-item>
                                  <a class="menu-item_link" @click="open = false" href="#">Отзывы</a>
                              </li>
                              <li class=menu-item>
                                  <a class="menu-item_link" @click="open = false" href="#contacts">Контакты</a>
                              </li>
                          </div>
                        <div class="burger-items_bottom">
                            <div class="items-bottom_phone">
                                <a href="tel:+79203849184">+7 (920) 384 91 84</a>
                                <span>Без выходных: 9:00-18:00</span>
                            </div>
                            <button class="burger-bottom_btn">
                                ЗАКАЗАТЬ ЗВОНОК
                            </button>
                        </div>
                    </div>
              </div>
            </div>
          </div>
        </header>
	
						