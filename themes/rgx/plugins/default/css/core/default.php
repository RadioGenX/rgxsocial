/******************************
	Basic
**********************************/
:root {
	--layout-sidebar-width: 220px;
}

/*******************************
	rgx global settngs
*******************************/

* {
	color:lime; 
	font-size:14.0pt;
	font-family: "Courier New", monospace;
	font-variant: small-caps;
	letter-spacing:1.0pt;
	background-color: black;
	font-variant:small-caps;
	line-height: 0.5;
	text-align:center;
	vertical-align:middle;
	box-sizing:border-box;
}

/*******************************/

body {
	font-size: 14px;
	background-color: #000000
	font-family: "Courier New", monospace;
	height: 100%;
}

.ossn-required {
	color: #a94442;
}

::-webkit-scrollbar {
	width: 12px;
}

::-webkit-scrollbar-track {
	background-color: #000000
	border-left: 1px solid lime;
}

::-webkit-scrollbar-thumb {
	background-color: lime;
}

::-webkit-scrollbar-thumb:hover {
	background-color: #aaa;
}

.ossn-form input[type='number'],
.ossn-form input[type='email'],
.ossn-form input[type='password'],
.ossn-form text,
.ossn-form select,
.ossn-form textarea,
.ossn-form input[type='text'] {
	width: 100%;
	background-color: #000000;
	border: 1px solid lime;
	padding: 8px;
	margin-bottom: 5px;
	outline: none;
	display: block;
	resize: vertical;
	border-radius: 5px;
	border-radius: 5px;
	box-shadow: none;
	-webkit-box-shadow: none
}

.ossn-form input[type='number']:focus,
.ossn-form input[type='email']:focus,
.ossn-form input[type='password']:focus,
.ossn-form text:focus,
.ossn-form select:focus,
.ossn-form textarea:focus,
.ossn-form input[type='text']:focus {
	outline: none;
}

.ossn-form select[readonly],
.ossn-form textarea[readonly],
.ossn-form input[readonly] {
	background: #dbdbdb;
}

.ossn-form input[type="file"] {
	display: block;
}

.btn:focus,
.btn:active {
	outline: none !important;
}

.btn-link {
	font-weight: 400;
	color: lime;
}

.form-control {
	height: initial;
}

.ossn-form-group-half {
	display: inline-block;
	width: calc(50% - 2px);
	float: left;
	box-sizing: border-box;
}

.radio-block-container {
	margin-bottom: 20px;
}

.ossn-form input[type='submit'] {
	margin-top: 5px;
	margin-bottom: 5px;
}

.ossn-red-borders {
	border: 1px solid #a94442 !important;
}

.fa,
.fas,
.far,
.fal,
.fad,
.fab {
	margin-right: 5px;
}

.hidden,
.ossn-hidden {
	display: none !important;
}

p {
	font-size: 15px;
}

.col-center {
	float: none;
	margin: 0 auto;
}

.container-table {
	display: table;
	width: 100%;
}

.center-row {
	display: table-cell;
	text-align: center;
}

.checkbox-block,
.radio-block {
	margin-top: 10px;
	margin-bottom: 10px;
}

.checkbox-block span,
.radio-block span {
	display: inline-block;
	margin-right: 10px;
	font-size: 15px;
	font-weight: bold;
	margin-left: 10px;
    cursor:pointer;
}

.ossn-checkbox-input {
	width: 20px;
	height: 20px;
	color: #0b769c;
	-webkit-appearance: none;
	background: none;
	border: 0;
	outline: 0;
	flex-grow: 0;
	background-color: #000000;
	transition: background 300ms;
	cursor: pointer;
	float: left;
	margin-top: 2px;
}

.checkbox-block [type=checkbox]::before {
	content: "";
	color: transparent;
	display: block;
	width: inherit;
	height: inherit;
	border-radius: inherit;
	border: 0;
	background-color: transparent;
	background-size: contain;
	box-shadow: inset 0 0 0 1px #CCD3D8;
}


.checkbox-block [type=checkbox]:checked {
	background-color: currentcolor;
}

.checkbox-block [type=checkbox]:checked::before {
	box-shadow: none;
	background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E %3Cpath d='M15.88 8.29L10 14.17l-1.88-1.88a.996.996 0 1 0-1.41 1.41l2.59 2.59c.39.39 1.02.39 1.41 0L17.3 9.7a.996.996 0 0 0 0-1.41c-.39-.39-1.03-.39-1.42 0z' fill='%23fff'/%3E %3C/svg%3E");
}

.checkbox-block [type=checkbox]:disabled {
	background-color: #CCD3D8;
	opacity: 0.84;
	cursor: not-allowed;
}

a {
	color: lime;
	text-decoration: none;
}


/************************************
	Layouts
************************************/


/** didn't we have a minimum page height in goblue? #702 **/

.ossn-layout-module,
.ossn-layout-contents,
.ossn-layout-media,
.ossn-layout-newsfeed {
	margin-top: 10px;
	min-height: 400px;
}

.ossn-home-container,
.ossn-layout-startup {
	min-height: 560px;
}

.ossn-home-container .ossn-page-contents {
	background: rgba(255, 255, 255, 0);
	border: 1px solid rgba(238, 238, 238, 0);
}

.ossn-layout-startup {
	min-height: 560px;
}

.ossn-layout-startup-background {
	min-height: 560px;
	background: url("<?php echo ossn_add_cache_to_url(ossn_theme_url('images/background.jpg'));?>") no-repeat;
	background-size: cover;
}

.ossn-layout-startup .col-lg-11 {
	width: 100%;
}

.ossn-layout-startup footer .ossn-footer-menu a {
	color: #000000;
}

.ossn-home-container {
	margin-top: 20px;
}

.ossn-layout-newsfeed .newsfeed-right {}

.ossn-page-container {
	overflow-x: hidden;
	min-height: 400px;
}

.ossn-layout-module {
	margin-top: 10px;
	background: #000000;
	border: 1px solid lime;
	border-radius: 10px;
}

.ossn-layout-module .module-title {
	background: #F9F7F7;
	border: 1px solid lime;
	padding: 10px;
	border-top-right-radius: 10px;
	border-top-left-radius: 10px;
}

.ossn-layout-module .module-contents {
	padding: 10px;
}

.ossn-layout-module .module-title .title {
	font-weight: bold;
	display: inline-block;
}

.ossn-layout-module .controls {
	float: right;
	display: inline-table;
}

.ossn-layout-media {
	margin-top: 10px;
}

.ossn-layout-media .like-share,
.ossn-layout-media .comments-list {
	margin-left: -10px;
	margin-right: -10px;
}

.ossn-layout-media .content,
.ossn-page-contents {
	background: #000000;
	padding: 10px;
	border: 1px solid lime;
}

.opensource-socalnetwork {
	min-height: 500px;
}

.ossn-home-container .row {
	margin-right: 10px;
	margin-left: 10px;
}

#ossn-signup-errors {
	display: none;
	margin-top: 10px;
}

.ossn-error-page {
	text-align: center;
	padding: 100px;
}

.ossn-error-page .error-heading {
	font-size: 50px;
	font-weight: bold;
}

.ossn-error-page .error-text {
	font-size: 16px;
}

.ossn-error-page .fa-exclamation-triangle {
	font-size: 100px;
}

.ossn-group-members {
	margin-right: 5px;
}

.ossn-page-loading-annimation {
	background: #000000;
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
}

.ossn-page-loading-annimation .ossn-page-loading-annimation-inner {
	width: 24px;
	margin: 0 auto;
	margin-top: 20%;
}

.newsfeed-middle-top {
	display: none;
	background-color: #000000;
	box-shadow: inset 0 0 0 1px rgba(144, 144, 144, 0.25);
	border-radius: 3px;
	margin-top: 2px;
	margin-bottom: 4px;
	padding: 9px;
}


/*******************************
	Topbar	
********************************/

.topbar {
	background: #000000;
	color: lime;
	z-index: 1;
	position: relative;
	height: 49px;
}

.topbar .fa {
	font-size: 20px;
	margin-top: 5px;
}

.topbar .site-name a {
	text-transform: uppercase;
	font-size: 20px;
	padding: 10px;
	color: lime;
	display: block;
	font-weight: bold;
}

.topbar .site-name a:hover {
	text-decoration: none;
}

.topbar-menu-left {
	position: relative;
	z-index: 1;
}

.topbar-menu-right ul {
	margin-bottom: 0px;
}

.topbar-menu-right li,
.topbar-menu-left li {
	display: inline-block;
}

.topbar-menu-right li a:not(.topbar-menu-right li .dropdown-item),
.topbar-menu-left li a {
	padding: 10px;
	display: block;
	color: #000000;
}

.topbar-menu-right li:hover,
.topbar-menu-left li:hover {
	cursor: pointer;
	background-color: lime;
}

.topbar .right-side-nospace .topbar-menu-right {
	margin-right: 0px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.topbar .right-side-space .topbar-menu-right {
	margin-right: 10px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.topbar .ossn-icons-topbar-friends,
.topbar .ossn-icons-topbar-messages,
.topbar .ossn-icons-topbar-notification i {
	color: lime;
}

.topbar .ossn-icons-topbar-friends-new,
.topbar .ossn-icons-topbar-messages-new,
.topbar .ossn-icons-topbar-notifications-new i {
	color: lime;
}

/************************************************
   Topbar Dropdown and Post+Comment menu icons
*************************************************/
.ossn-wall-item .dropdown-menu li a:before,
.ossn-topbar-dropdown-menu ul li a:before {
	content: "\f068";
	display: inline-block;
	float: left;
	margin-right: 10px;
	font-family: var(--fa-style-family, "Font Awesome 6 Free");
	font-weight: var(--fa-style, 900);
}

.ossn-wall-item>.dropdown-menu {
	min-width: 200px;
}

.menu-topbar-dropdown-administration:before {
	content: "\f085" !important;
}

.menu-topbar-dropdown-account_settings:before {
	content: "\f4fe" !important;
}

.menu-topbar-dropdown-logout:before {
	content: "\f011" !important;
}

.ossn-edit-comment:before,
.ossn-wall-item .post-control-edit:before {
	content: "\f303" !important;
}

.ossn-delete-comment:before,
.ossn-wall-item .post-control-delete:before {
	content: "\f2ed" !important;
}

.ossn-topbar-dropdown-menu {
	float: right;
}

.comment-metadata .dropdown-item {
	padding: 0.4rem 1rem;
}

.ossn-topbar-dropdown-menu ul li a,
.ossn-topbar-dropdown-menu ul li {
	display: block;
	width: 100%;
	color: lime;
}

.ossn-topbar-dropdown-menu .dropdown-menu {
	margin: 1px -120px 0;
	min-width: 200px;
}

/************************************************
   Topbar Dropdown and Post+Comment menu icons end
*************************************************/
/***********************************
	Ossn Wall
*************************************/

.ossn-wall {}

.ossn-wall-items {}

.ossn-wall-item {
	padding: 15px;
	padding-top: 10px;
	margin-top: 20px;
	background-color: #000000;
	padding-bottom: 0px;
	border-radius: 10px;
	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}

.ossn-wall-item:first-child {
	margin-top: 0px;
}

.ossn-wall-item .friends a {
	text-decoration: none;
}

.ossn-wall-item .friends a:first-child:before {
	content: "-";
	margin-left: 5px;
	margin-right: 5px;
}

.ossn-wall-item .user-img {
	border-radius: 50px;
	display: inline-block;
	float: left;
	margin-right: 10px;
}

.ossn-wall-item .meta {}

.ossn-wall-item .meta .user {
	margin-top: 3px;
}

.ossn-wall-item .meta .user a {
	font-weight: bold;
}

.ossn-wall-item .meta .user span {
	color: #999;
}

.ossn-wall-item .post-contents {
	margin-top: 15px;
}

.ossn-wall-item .post-contents p {
	/** Incorrect Hyphenation in the theme GoBlue 3.0 #824 **/
	word-break: break-word;
	text-align: justify;
}

.ossn-wall-item .post-contents img {
	max-width: 100%;
	border: 1px solid lime;
	display: block;
	margin-bottom: 10px;
}

.ossn-wall-item .meta .post-menu {
	float: right;
}

.ossn-wall-item .meta .post-menu .btn-link {
	font-size: 14px;
}

.ossn-wall-container {
	border-radius: 2px;
	margin-top: -5px;
	margin-bottom: 10px;
	border-top-right-radius: 10px;
	border-top-left-radius: 10px;
}

.ossn-wall-container textarea {
	padding: 10px;
	width: 100%;
	border: 1px solid;
	border: 0;
	border-top: 0px;
	resize: none;
	outline: none;
	background: #000000;
	border-radius: 0;
	font-size: 15px;
	resize: vertical;
	margin-left: 0;
}

.ossn-wall-container .controls {
	background-color: #000000;
	margin-top: 5px;
	border: 1px solid lime;
	padding: 5px 10px;
	margin-left: -10px;
	margin-right: -10px;
	border-left: 0;
	border-right: 0;
}

.ossn-wall-container .wall-tabs {
	border-bottom: 1px solid lime;
	background-color: #000000;
	border: 1px solid lime;
	margin-top: 5px;
	border-top-right-radius: 10px;
	border-top-left-radius: 10px;
}

.ossn-wall-container .wall-tabs .item {
	padding: 10px;
	display: inline-flex;
	cursor: pointer;
	border-bottom: 1px solid lime;
	font-weight: bold;
	font-size: 13px;
}

.ossn-wall-container .wall-tabs .item:hover {
	background: lime;
}

.ossn-wall-container .wall-tabs .item div {
	display: inline-block;
}

.ossn-wall-container .wall-tabs .item .text {
	font-weight: bold;
	margin-top: 1px;
	margin-left: 5px;
	position: absolute;


	font-size: 15px;
}

.ossn-wall-container .tabs-input {}

.ossn-wall-container .controls li {
	padding: 7px;
	background: #000000;
	display: inline-block;
	border-radius: 50%;
	cursor: pointer;
	width: 35px;
	height: 35px;
	text-align: center;
}

.ossn-wall-container .controls .ossn-wall-friend,
.ossn-wall-container .controls .ossn-wall-location,
.ossn-wall-container .controls .ossn-wall-photo,
.ossn-wall-container-control-menu-emojii-selector {
	color: #5d5d5d;
}

.ossn-wall-container .controls li:hover {
	background: #000000;
}

.ossn-wall-post-button-container {
	display: inline-table;
	float: right;
}

.ossn-wall-privacy-dummy,
.ossn-wall-privacy {
	margin-right: 5px;
	padding: 5px 10px;
	background: #000000;
	border-radius: 10px;
	cursor: pointer;
	display: inline-block;
	margin-top: 10px;
}

.ossn-wall-privacy-dummy {
	background: #000000;
	cursor: initial;
	opacity: 0.5;
}

.ossn-wall-privacy:hover {
	background: limeeee8c;
}

.ossn-wall-privacy-dummy span>span,
.ossn-wall-privacy span>span {
	margin-left: 5px;
	float: right;
}

.ossn-wall-container input[type='submit'] {
	padding: 3px 20px;
	margin-top: 6px;
	margin: 10px auto;
	border-radius: 5px;
}

.ossn-wall-container i {
	font-size: 15px;
	margin-right: 0;
}

.ossn-wall-container-data {
	background: #000000;
	padding: 10px;
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
	border: 1px solid lime;
	border-bottom-color: lime;
	border-width: 0 1px 2px 1px;
}

#ossn-wall-photo {
	margin-top: 10px;
}

.ossn-wall-container input[type="file"],
.ossn-wall-container input[type="text"] {
	width: 100%;
	border-top: 1px dashed lime;
	padding: 5px;
	margin-bottom: 5px;
	margin-top: -5px;
	outline: none;
}

.ossn-wall-container input[type="file"] {
	border: 1px solid lime;
	border-radius: 10px;
	background: #000000;
}

#token-input-ossn-wall-friend-input {
	width: 100% !important;
	padding: 7px;
	margin-bottom: 5px;
	margin-top: -5px;
	background: #000000;
	border: 0;
}

#ossn-wall-location-input {
	background: #000000;
	border: 1px solid lime;
	border-radius: 10px;
}

#ossn-wall-location .ap-input-icon svg {
	top: 15px
}

#ossn-wall-form .ossn-loading {
	margin: 7px;
}

.ossn-wall-item-type {
	display: inline-block;
}

.ossn-wall-item .friends {
	display: inline-block;
}


/*******************************
	Comments Likes
********************************/

.ossn-comment-menu {
	float: right;
	margin-left: 10px;
}

.comments-item:hover .ossn-comment-menu {
	display: block;
	margin-left: 10px;
}

.comments-likes {
	width: 100%;
}

.menu-likes-comments-share {
	margin-bottom: 10px;
}

.menu-likes-comments-share li {
	display: inline-block;
}

.menu-likes-comments-share li::after {
	content: "-";
	margin-left: 5px;
	margin-right: 5px;
	color: lime;
}

.menu-likes-comments-share li:last-child:after {
	content: " ";
}

.comments-list {
	background-color: #000000;
	margin-left: -15px;
	margin-right: -15px;
	padding-left: 10px;
	padding-right: 10px;
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
}

.comments-list .comments-item {
	padding-top: 10px;
	padding-bottom: 5px;
}

.comments-list .comments-item:first-child {
	margin-top: 0px;
	padding-top: 10px;
}

.comments-list .comments-item:last-child {
	border-bottom: none;
}

.comments-list .comments-item .comment-user-img {
	display: inline-block;
	border-radius: 32px;
}


/** UI improvements comments #1524 **/

.comments-list .comments-item .comment-contents {
	display: inline-block;
	margin-top: -3px;
	background-color: #000000;
	border-radius: 18px;
	width: auto;
	line-height: 16px;
	padding: 6px 12px 7px 12px;
}

.comment-container {
	position: relative;
	z-index: 0;
}

.comments-item .col-lg-11 {
	padding-left: 0px;
}

.comment-metadata .time-created,
.comment-metadata a {
	display: inline-block;
}

.comment-contents p {
	margin: 0px;
	word-break: break-word;
	text-align: left;
}

.comment-contents p img {
	display: block;
	margin-top: 10px;
	margin-bottom: 10px;
	max-width: 100%;
}

.comment-contents .owner-link {
	font-weight: bold;
	margin-right: 5px;
	font-size: 14px;
}

.comment-contents {
	width: 100%;
}

.comment-container span[readonly='readonly'],
.comment-container input[readonly='readonly'] {
	background: lime;
}

.comments-item .comment-metadata {
	margin-top: 5px;
}

.comment-box {
	width: 100%;
	border: 1px solid lime;
	padding: 6px 65px 6px 12px;
	margin-bottom: 5px;
	outline: none;
	display: block;
	resize: vertical;
	min-height: 32px;
	background-color: #000000;
	border: 1px solid lime;
	border-radius: 15px;
	word-break: break-word;
	text-align: left;
}

[contentEditable=true]:empty:not(:focus)::before {
	content: attr(placeholder);
}


/*********************************
	Like
************************************/

.like-share {
	border-top: 1px solid lime;
	border-bottom: 1px solid lime;
	padding: 10px;
	margin-top: 10px;
	background-color: #000000;
	margin-left: -15px;
	margin-right: -15px;
	padding-left: 20px;
	padding-right: 20px;
}

.ossn-like-comment,
.ossn-total-likes {
	margin-left: 10px;
}


/********************************
	Global
***********************************/

.time-created {
	font-size: 14px;
	font-style: italic;
	color: #999;
}


/********************************
	Sidebar Nav
*********************************/

.sidebar {
	background-color: #000000;
	height: 200px;
	z-index: 1000;
	width: var(--layout-sidebar-width);
	position: absolute;
	height: 100%;
	margin-left: calc(-1 * var(--layout-sidebar-width));
	overflow-y: auto;
	overflow-x: hidden;
	color: #000000;
}

.sidebar a {
	color: #000000;
	font-size: 14px;
}

.sidebar a li:before {
	font-size: initial;
}

.sidebar-close {
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.sidebar-open {
	margin-left: 0px;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.sidebar-open-no-annimation {
	margin-left: 0px;
}

.sidebar-open-page-container {
	margin-left: var(--layout-sidebar-width);
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.sidebar-open-page-container-no-annimation {
	margin-left: var(--layout-sidebar-width);
}

.sidebar-close-page-container {
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.newseed-uinfo {
	padding: 10px;
	margin-bottom: 10px;
}

.newseed-uinfo img {
	display: inline-block;
	border-radius: 50px;
	float: left;
}

.newseed-uinfo .name {
	display: inline-block;
	width: 100px;
	margin-left: 10px;
	margin-top: 4px;
}

.newseed-uinfo .name a {
	font-weight: bold;
	display: block;
	color: #000000;
	font-size: 13px;
}

.newseed-uinfo .name .edit-profile {
	font-weight: inherit;
}

.sidebar-menu-nav {
	overflow: auto;
	font-size: 13px;
	font-weight: 200;
	top: 0px;
	width: 100%;
	height: 100%;
}

.sidebar-menu-nav ul,
.sidebar-menu-nav li {
	list-style: none;
	padding: 0px;
	margin: 0px;
	line-height: 35px;
	cursor: pointer;
}

.sidebar-menu-nav ul:not(collapsed) .arrow:before,
.sidebar-menu-nav li:not(collapsed) .arrow:before {
	font-family: 'Font Awesome 5 Free';
	content: "\f078";
	display: inline-block;
	padding-left: 10px;
	padding-right: 10px;
	font-weight: 900;
	vertical-align: middle;
	float: right;
}

.sidebar-menu-nav ul .sub-menu li {
	padding-left: 20px;
}

.sidebar-menu-nav ul .sub-menu li,
.sidebar-menu-nav li .sub-menu li {
	border: none;
	line-height: 30px;
	border-bottom: 1px solid #23282e;
	margin-left: 0px;
}

.sidebar-menu-nav ul .sub-menu li:hover,
.sidebar-menu-nav li .sub-menu li:hover {
	background-color: #020203;
}

.sidebar-menu-nav ul .sub-menu li:before,
.sidebar-menu-nav li .sub-menu li:before {
	font-family: 'Font Awesome 5 Free';
	content: "\f105";
	display: inline-block;
	padding-left: 10px;
	padding-right: 10px;
	vertical-align: middle;
	font-weight: 900;
	font-size: 13px;
}

.sidebar-menu-nav li {
	padding-left: 0px;
	border-bottom: 1px solid #23282e;
}

.sidebar-menu-nav li a {
	text-decoration: none;
	color: #000000;
}

.sidebar-menu-nav li a i {
	padding-left: 10px;
	width: 20px;
	padding-right: 20px;
}

.sidebar-menu-nav li:hover {
	border-left: 3px solid #000000;
	background-color: #4f5b69;
	-webkit-transition: all 1s ease;
	-moz-transition: all 1s ease;
	-o-transition: all 1s ease;
	-ms-transition: all 1s ease;
	transition: all 1s ease;
}

@media (max-width: 767px) {
	.sidebar-menu-nav {
		position: relative;
		width: 100%;
		margin-bottom: 10px;
	}

	.ossn-group-members {
		text-align: center;
	}

	.ossn-group-members .request-controls {
		float: none;
		padding-bottom: 10px;
	}

	.ossn-group-members .uinfo .userlink {
		float: none !important;
	}
}


/******************************
	Ossn global css clsses
*******************************/

.right {
	float: right;
}

.left {
	float: left;

}

.text-right {
	text-align: right;
}

.text-left {
	text-align: left;
}

.text-center {
	text-align: center;
}

.margin-top-10 {
	margin-top: 10px;
}

.margin-top-20 {
	margin-top: 20px;
}


/************************
	Dropdown
***************************/

.dropdown-submenu {
	position: relative;
}

.dropdown-submenu>.dropdown-menu {
	top: 0;
	left: 100%;
	margin-top: -6px;
	margin-left: -1px;
	-webkit-border-radius: 0 6px 6px 6px;
	-moz-border-radius: 0 6px 6px;
	border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
	display: block;
}

.dropdown-submenu>a:after {
	display: block;
	content: " ";
	float: right;
	width: 0;
	height: 0;
	border-color: transparent;
	border-style: solid;
	border-width: 5px 0 5px 5px;
	border-left-color: lime;
	margin-top: 5px;
	margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
	border-left-color: #000000;
}

.dropdown-submenu.pull-left {
	float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
	left: -100%;
	margin-left: 10px;
	-webkit-border-radius: 6px 0 6px 6px;
	-moz-border-radius: 6px 0 6px 6px;
	border-radius: 6px 0 6px 6px;
}

.dropmenu-topbar-icons {
	left: inherit;
	right: 0;
}


/******************************************
	Ossn Ads
*******************************************/
.ad-image-container {
	background: #000000;
	padding: 5px;
	border: 1px solid #ebebeb;
}

.ossn-ad-item {}

.ossn-ad-item .ad-image {
	max-width: 200px;
	margin: 0 auto;
	display: block;
}

.ossn-ad-item a {
	text-decoration: none;
	color: #000;
	cursor: pointer;
}

.ossn-ad-item .ad-title {
	font-weight: bold;
	font-size: 15px;
	margin-bottom: 5px;
}

.ossn-ad-item .ad-link {
	margin-bottom: 5px;
}

.ossn-ad-item p {
	margin-top: 10px;
	text-align: justify;
}


/*****************************
	Widgets
******************************/

.ossn-widget {
	margin-bottom: 10px;
	background-color: #000000;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
	border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
}

.ossn-widget .widget-heading {
	background: #000000;
	border: 1px solid lime;
	padding: 10px;
	font-weight: bold;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
}

.ossn-widget .widget-contents {
	padding: 10px;
	border-bottom: 1px solid lime;
	border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
}

.ossn-privacy .radio-block {
	margin-bottom: 0;
	margin-top: 0;
	display: flex;
}

.ossn-privacy label {
	margin-bottom: 0px;
}

.ossn-privacy .radio-block span {
	font-weight: normal;
	width: 85%;
	margin-top: 7px;
}

.group-add-privacy .radio-block span {
	margin-top: 5px;
}

.group-add-privacy .radio-block .ossn-radio-input {
	float: left;
}


/***********************************
	Ossn Notifications
***************************************/

.ossn-notifications-box .collapsing {
	-webkit-transition: none;
	transition: none;
	display: none;
}

.ossn-notifications-box {
	width: 430px;
	color: #000;
	position: absolute;
	top: 100%;
	right: 20px;
	z-index: 1000;
	display: none;
	float: left;
	min-width: 160px;
	padding: 5px 0;
	margin: 2px 0 0;
	font-size: 14px;
	text-align: left;
	list-style: none;
	background-color: #000000;
	-webkit-background-clip: padding-box;
	background-clip: padding-box;
	border: 1px solid lime;
	border: 1px solid rgba(0, 0, 0, .15);
	border-radius: 5px;
	-webkit-box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
	box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
	border-bottom-left-radius: 7px;
	border-bottom-right-radius: 7px;
}

.ossn-notifications-box .notificaton-item {
	border-bottom: 1px solid lime;
}

.ossn-notifications-box .notificaton-item:hover,
.ossn-notifications-box .notificaton-item .active {
	background-color: #000000;
}

.ossn-notifications-box .type-name {
	font-size: 13px;
	font-weight: bold;
	padding: 1px 10px 5px 10px;
	color: #000;
	height: 25px;
	border-bottom: 1px solid #DDDDDD;
}

.ossn-notification-box-loading {
	margin: 0 auto;
	margin-top: 20px;
	margin-bottom: 20px;
}

.ossn-no-notification {
	text-align: center;
	padding: 10px;
}

.ossn-notifications-box .type-name .title {
	display: inline-block;
}

.ossn-notifications-box .type-name .links {
	display: inline-block;
	float: right;
}

.ossn-notifications-box .type-name .links a {
	color: lime;
	display: inline;
	font-weight: normal;
}

.ossn-notifications-box .notification-image,
.ossn-notifications-box .notification-image img {
	width: 50px;
	height: 50px;
	display: inline-block;
}

.ossn-notifications-box .bottom-all a,
.ossn-notifications-box .notfi-meta strong {
	color: lime;
}

.ossn-notifications-box .notfi-meta {
	width: 330px;
	margin-left: 5px;
	display: inline-block;
	float: right;
	color: #000;
}

.ossn-notifications-box .bottom-all a {
	font-weight: bold;
}

.ossn-notifications-box .bottom-all {
	background: #F7F7F7;
	text-align: center;
	padding: 0px;
	padding-top: 10px;
	display: block;
	height: 40px;
	border-top: 1px solid lime;
	border-bottom-left-radius: 7px;
	border-bottom-right-radius: 7px;
}

.ossn-notifications-box .metadata {
	margin-bottom: -5px;
}

.ossn-notifications-box .messages-inner {
	max-height: 400px;
	overflow: hidden;
	overflow-y: scroll;
}

.latest-users img {
	margin-bottom: 5px;
}

.ossn-notification-mark-read {
	float: right;
}

.ossn-notifications-all a {}

.ossn-notifications-all li {
	padding: 10px;
	display: block;
}

.ossn-notifications-all a:hover {
	cursor: pointer;
	background-color: transparent;
	text-decoration: none;
}

.ossn-notifications-box li:hover,
.ossn-notifications-box a:hover,
.ossn-notifications-all a:hover,
.ossn-notifications-all li:hover {
	background: #000000;
}

.ossn-notification-container {
	background-color: #dc0d17;
	background-image: -webkit-linear-gradient(#fa3c45, #dc0d17);
	color: #000000;
	min-height: 13px;
	padding: 1px 3px;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, .4);
	-webkit-border-radius: 2px;
	-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .7);
	-webkit-background-clip: padding-box;
	display: inline-block;
	font-size: 11px;
	line-height: normal;
	position: absolute;
	margin-left: -10px;
	z-index: 1;
}

.notification-friends .image {
	width: 50px;
	height: 50px;
	display: inline-table;
	float: left;
}

.ossn-notifications-friends-inner a {
	color: lime !important;
	display: inline-block !important;
}

.ossn-notifications-friends-inner {
	padding: 0px 5px;
}

.ossn-notifications-friends-inner form {
	display: inline-table;
}

.ossn-notification-page li img {
	display: none;
}

.notification-friends li {
	width: 100%;
	border-bottom: 1px solid lime;
}

.notification-friends .notfi-meta a {
	color: lime;
	font-weight: bold;
	display: inline-block;
	width: 200px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}

.ossn-notifications-friends-inner .controls {
	float: right;
	margin-top: 6px;
	display: inline-block;
}

.friends-added-text {
	/**float: left !important;
    margin-top: -18px !important;
    display: block !important;
    margin-left: 10px; **/
	font-size: 13px;
}

.ossn-notifications-friends-inner .btn {
	padding: 3px 9px;
	border-radius: 1px;
}

.notification-friends {
	max-height: 400px;
}


/*******************************
	Profile
********************************/

.ossn-profile .top-container {
	background: #000000;
	border: 1px solid #C4CDE0;
	border-width: 1px 1px 2px;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
}

.ossn-profile .top-container .profile-cover {
	height: 200px;
	overflow: hidden;
	opacity: .99;
	background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0)), color-stop(1%, rgba(0, 0, 0, 0)), color-stop(100%, rgba(0, 0, 0, .38)));
	background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
	background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
	background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
	background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 1%, rgba(0, 0, 0, .38) 100%);
	filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#94000000', GradientType=0);
	position: relative;
}

.ossn-profile .top-container .profile-cover img {
	width: auto;
}

.ossn-profile-row {
	margin-bottom: 20px;
}

.profile-hr-menu ul {
	margin-bottom: 0px;
	padding: 0px;
}

.profile-hr-menu ul li {
	display: inline-block;
}

.profile-hr-menu ul li a:not(.dropdown a) {
	display: block;
	padding: 15px;
	margin-right: 5px;
	font-weight: bold;
	border-right: 1px solid lime;
}

.profile-hr-menu .dropdown-menu {
	margin-left: 0px;
}

.profile-hr-menu .dropdown-menu li {
	display: block;
	border-bottom: 0;
	padding: initial;
	margin: auto;
}

.profile-hr-menu .dropdown a i {
	margin-left: 5px;
}

.profile-hr-menu .dropdown-menu li a {
	border-right: 0px;
	margin-right: 0px;
}

.profile-hr-menu ul li:hover {}

.profile-hr-menu {
	border-bottom: 1px solid lime;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
}

.profile-hr-menu ul li:last-child {
	border-right: none;
}

.ossn-profile .profile-photo {
	position: absolute;
	margin-left: 20px;
	margin-top: -190px;
	background-color: #000000;
	border: 1px solid lime;
	border-radius: 2px 2px 2px 2px;
	-webkit-border-radius: 2px 2px 2px 2px;
	-moz-border-radius: 2px 2px 2px 2px;
	padding: 2px;
}

.ossn-profile .profile-photo img {}

.ossn-profile .user-fullname {
	color: lime;
	font-weight: bold;
	margin-top: -155px;
	font-size: 35px;
	font-size: 2.3vw;
	margin-left: 211px;
	position: absolute;
	text-shadow: 0 0 3px #000;
	/** overlapping issue with longer names on profile page #630 **/
	max-width: 820px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	background-color: transparent;
}

.ossn-profile-role {
	font-size: 25px !important;
	margin-top: -105px !important;
	background-color: transparent;
}

.btn-standalone-grey {
	color: #000000;
	font-weight: bold;
	text-decoration: none;
	width: auto;
	margin: 0;
	font-size: 12px;
	line-height: 16px;
	padding: 5px 6px;
	cursor: pointer;
	outline: none;
	text-align: center;
	white-space: nowrap;
	-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #000000;
	-moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.10), inset 0 1px 0 #000000;
	box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #000000;
	border: 1px solid #999;
	border-bottom-color: #888;
	background: lime;
	background: -webkit-gradient(linear, 0 0, 0 100%, from(#F5F6F6), to(#E4E4E3));
	background: -moz-linear-gradient(#f5f6f6, #e4e4e3);
	background: -o-linear-gradient(#f5f6f6, #e4e4e3);
	background: linear-gradient(#F5F6F6, #E4E4E3);
	text-decoration: none;
}

.btn-standalone-grey:active {
	background: #ddd;
	border-bottom-color: #999;
	box-shadow: none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
}

.btn-standalone-grey:hover {
	color: #000000;
	text-decoration: none;
}

.profile-cover-controls {
	position: absolute;
	width: 100%;
	margin-right: -32px;
	margin-top: 150px;
	z-index: 1;
}

.change-cover {
	float: right;
	position: relative;
	margin-right: 50px !important;
}

.reposition-cover {
	float: right;
	position: relative;
	margin-right: 5px !important;
}

.profile-menu {
	float: right;
	position: relative;
	margin-top: -40px;
	margin-right: 20px;
}

#cover-menu {
	display: none;
}

.upload-photo {
	background: #000;
	opacity: 0.5;
	width: 170px;
	padding: 10px;
	position: absolute;
	color: #000000;
	text-align: center;
	font-size: 15px;
	font-family: sans-serif;
}

.upload-photo span {
	width: 100%;
	padding: 12px;
	text-align: center;
}

.user-cover-uploading {
	opacity: 0.4;
}

.user-photo-uploading {
	height: 100%;
	opacity: 0.8;
	background: #000000;
	width: 100%;
	padding: 7px;
	position: absolute;
	border-radius: 2px;
}

.user-photo-uploading span {
	display: none;
}

.ossn-profile-bottom {
	margin-top: 10px;
}

.page-sidebar,
.ossn-profile-sidebar {}

.ossn-layout-media .content {
	margin-right: 10px;
	margin-left: 10px;
}

.ossn-profile-extra-menu {
	display: inline-block;
}


/*****************************
    Groups
*****************************/

.ossn-group-cover img {
	width: auto;
}


/*****************************
	Side Menu icons
*******************************/

.menu-section-item-newsfeed:before {
	content: "\f0a1" !important;
}

.menu-section-item-friends:before {
	content: "\f0c0" !important;
}

.menu-section-item-allgroups:before {
	content: "\f0c0" !important;
}

.menu-section-item-photos:before {
	content: "\f03e" !important;
}

.menu-section-item-messages:before {
	content: "\f0e0" !important;
}

.menu-section-item-invite-friends:before {
	content: "\f234" !important;
}

.menu-section-item-addgroup:before {
	content: "\f067" !important;
}

li[class^="menu-section-item-"] {
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	width: var(--layout-sidebar-width);
	padding-right: 10px;
}


/******************************
	Search
******************************/

.ossn-menu-search li {
	display: block;
}

.ossn-menu-search li:hover {
	background: #000000;
}

.ossn-menu-search li a {
	display: block;
	width: 100%;
	padding: 5px;
}

.ossn-menu-search li a:hover {
	text-decoration: none;
}

.ossn-menu-search li a .text {
	display: inline-block;
}

.ossn-search-page .ossn-users-list-item {
	margin-left: 0px;
	margin-right: 0px;
}

.ossn-search-page .ossn-users-list-item .uinfo {
	margin-left: 25px;
}

.ossn-menu-search-users .text:before {
	font-family: 'Font Awesome 5 Free';
	content: "\f007";
	font-weight: 900;
	padding-right: 10px;
	vertical-align: middle;
	float: left;
}

.ossn-menu-search-groups .text:before {
	font-family: 'Font Awesome 5 Free';
	content: "\f0c0";
	font-weight: 900;
	padding-right: 10px;
	vertical-align: middle;
	float: left;
}


/******************************
	Token Input
*******************************/

ul.token-input-list {
	overflow: hidden;
	height: auto !important;
	width: 100%;
	cursor: text;
	font-size: 12px;
	min-height: 1px;
	margin: 0;
	z-index: 999;
	background-color: #000000;
	list-style-type: none;
	clear: left;
	color: #2B5470;
	border-top: 1px dashed lime;
	border-right: 1px solid lime;
	border-left: 1px solid lime;
	border-bottom: 1px solid lime;
	padding: 5px 0 0;
	border-radius: 10px;
}

li.token-input-token {
	overflow: hidden;
	height: auto !important;
	height: 15px;
	margin: 3px;
	padding: 1px 3px;
	background-color: #000000;
	color: #2B5470;
	cursor: default;
	font-weight: bold;
	border: 1px solid #ccd5e4;
	font-size: 11px;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	float: left;
	white-space: nowrap;
}

li.token-input-token p {
	display: inline;
	padding: 0;
	margin: 0;
	font-size: 12px;
}

li.token-input-token span {
	color: #a6b3cf;
	margin-left: 5px;
	font-weight: bold;
	cursor: pointer;
}

li.token-input-selected-token {
	background-color: #000000;
	border: 1px solid lime;
	color: #2B5470;
	font-weight: bold;
}

li.token-input-input-token {
	margin: 0;
	padding: 0;
	list-style-type: none;
}

div.token-input-dropdown {
	position: absolute;
	width: 400px;
	background-color: #000000;
	overflow: hidden;
	border-left: 1px solid lime;
	border-right: 1px solid lime;
	border-bottom: 1px solid lime;
	cursor: default;
	font-size: 11px;
	z-index: 1;
}

div.token-input-dropdown p {
	margin: 0;
	padding: 5px;
}

div.token-input-dropdown ul {
	margin: 0;
	padding: 0;
}

div.token-input-dropdown ul li {
	background-color: #000000;
	padding: 3px;
	margin: 0;
	list-style-type: none;
}

div.token-input-dropdown ul li.token-input-dropdown-item {
	background-color: #000000;
}

div.token-input-dropdown ul li.token-input-dropdown-item2 {
	background-color: #000000;
}

div.token-input-dropdown ul li em {
	font-weight: bold;
	font-style: normal;
}

div.token-input-dropdown ul li.token-input-selected-dropdown-item {
	background-color: #000000;
	color: #2B5470;
	font-weight: bold;
}


/******************************************
		System Messages
*******************************************/

.ossn-system-messages .ossn-system-messages-inner {
	margin-top: 20px;
	margin-bottom: 20px;
	display: none;
}

.ossn-system-messages .ossn-system-messages-inner .alert {
	margin-bottom: 0px;
}


/** v1-v3 compitible **/

.ossn-message-done {
	border: 1px solid #1EB0DF;
	border-width: 1px;
	background-color: #000000;
	padding: 13px;
	text-align: left;
}


/*************************************
	0ssn modal box
***************************************/

.ossn-halt {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	z-index: 10000;
	background-color: #000;
    opacity: 0.4;
	cursor: auto;
	height: 100%;
	display: none;
}

.ossn-light {}
.ossn-viewer {
	width: 940px;
	margin: 0 auto;
	position: relative;
}

.ossn-viewer .ossn-container {
	height: 200px;
	position: fixed;
	width: 900px;
	z-index: 10000;
	margin-top: 70px;
	min-height: 515px;
}

.ossn-viewer-loding {
	font-size: 15px;
}

.ossn-viewer .ossn-container .close-viewer {
	float: right;
	cursor: pointer;
	margin-right: 5px;
	font-weight: bold;
	font-size: 13px;
	color: lime;
}

.ossn-container tbody {
	background: #000;
}
.ossn-viewer .info-block {
	background: #000000;
	height: 100%;
	width: 325px;
	float: right;
	margin-left: -3px;
}

.image-block img {
	max-width: 700px;
}

.ossn-message-box {
	width: 470px;
	min-width: 470px;
	min-height: 96px;
	background: #000000;
	border: 1px solid #999;
	position: fixed;
	top: 0px;
	left: 0px;
	right: 0px;
	margin-left: auto;
	margin-right: auto;
	z-index: 60000;
	margin-top: 100px;
	border-radius: 10px;
	display: none;
	box-shadow: 0 2px 26px rgba(0, 0, 0, 0.3), 0 0 0 1px rgba(0, 0, 0, 0.1);
}

.ossn-message-box .close-box {
	float: right;
	color: lime;
	cursor: pointer;
}

.ossn-message-box .title {
	background: #F5F6F7;
	padding: 11px;
	border-top-right-radius: 10px;
	border-top-left-radius: 10px;
	border-bottom: 1px solid lime;
	color: #5E5656;
	font-size: 14px;
	font-weight: bold;
}

.ossn-message-box .contents {
	padding: 10px;
	min-height: 150px;
	max-height: 420px;
	overflow-x: auto;
	overflow: overlay;
	overflow-x: -moz-hidden-unscrollable
}

.ossn-message-box .control {
	margin-left: 10px;
	margin-right: 10px;
	height: 45px;
	padding: 10px;
	border-top: 1px solid lime;
}

.ossn-message-box .control .controls {
	float: right;
}

.ossn-message-box .control .controls .btn {
	padding: 2px 13px;
	border-radius: 5px;
}

.ossn-message-box .contents input[type='text'] {
	border: 1px solid lime;
	width: 292px;
	padding: 7px;
}

.ossn-message-box .contents input[type='text'],
.ossn-message-box .contents label {
	display: inline-table;
}

.ossn-message-box .contents label {
	color: #666;
	font-weight: bold;
	margin-right: 13px;
}

.ossn-form input[type=checkbox],
.ossn-form input[type=radio] {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
	display: inline-block;
	position: relative;
	background-color: #000000;
	color: #666;
	top: 5px;
	height: 20px;
	width: 20px;
	border: 1px solid lime;
	border-radius: 50px;
	cursor: pointer;
	outline: none;
	flex-grow: 0;
	transition: background 300ms;
	margin-bottom: 5px;
}

.ossn-form input[type=checkbox] {
	border-radius: 2px;
}

.ossn-form input[type=checkbox]:checked::before {
	font: 9px/1 'Open Sans', sans-serif;
	left: 7px;
	top: 5px;
	content: '\02143';
}
.ossn-form input[type=radio]:checked::before {
	position: absolute;
	font: 9px/1 'Open Sans', sans-serif;
	left: 7px;
	top: 5px;
	content: '\02143';
    transform: rotate(40deg);
}
.ossn-form input[type=checkbox]:hover,
.ossn-form input[type=radio]:hover {
	background-color: #f7f7f7;
}

.ossn-form input[type=checkbox]:checked,
.ossn-form input[type=radio]:checked {
	background-color: #0b769c;
	color: #000000;
	font-weight: bold;
}
.checkbox-block span {
	margin-top:6px;
}
.checkbox-block-container {
	margin-bottom: 20px;
}
#ossn-home-signup .checkbox-block,
.ossn-profile-bottom .ossn-edit-form .checkbox-block {
	margin-top: 0;
	margin-bottom: 0;
}
/*******************************
	Ossn Blocked
*********************************/

.ossn-blocked i {
	font-size: 100px;
}

.ossn-blocked {
	text-align: center;
	padding: 100px;
}

.ossn-blocked div {
	font-size: 50px;
	font-weight: bold;
}

.ossn-blocked p {
	font-size: 16px;
}


/********************************
	Loading Icon
    @source: https://github.com/jlong/css-spinners
*********************************/

@-moz-keyframes three-quarters-loader {
	0% {
		-moz-transform: rotate(0deg);
		transform: rotate(0deg);
	}

	100% {
		-moz-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}

@-webkit-keyframes three-quarters-loader {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}

	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}

@keyframes three-quarters-loader {
	0% {
		-moz-transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}

	100% {
		-moz-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}


/* :not(:required) hides this rule from IE9 and below */

.ossn-loading:not(:required) {
	-moz-animation: three-quarters-loader 1250ms infinite linear;
	-webkit-animation: three-quarters-loader 1250ms infinite linear;
	animation: three-quarters-loader 1250ms infinite linear;
	border: 8px solid #38e;
	border-right-color: transparent;
	border-radius: 16px;
	box-sizing: border-box;
	position: relative;
	overflow: hidden;
	text-indent: -9999px;
	width: 24px;
	height: 24px;
}

.ossn-box-loading {
	margin-left: 216px;
	margin-top: 37px;
}


/*******************************
	Buttons
*********************************/

.button-grey,
.btn-action {
	color: #000000;
	font-weight: bold;
	width: auto;
	margin: 0;
	font-size: 12px;
	line-height: 16px;
	padding: 5px 6px;
	cursor: pointer;
	outline: none;
	text-align: center;
	white-space: nowrap;
	-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #000000;
	-moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.10), inset 0 1px 0 #000000;
	box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #000000;
	border: 1px solid lime;
	background: -webkit-gradient(linear, 0 0, 0 100%, from(#F5F6F6), to(#E4E4E3));
	background: -moz-linear-gradient(#f5f6f6, #e4e4e3);
	background: -o-linear-gradient(#f5f6f6, #e4e4e3);
	background: linear-gradient(#F5F6F6, #E4E4E3);
	border-radius: 4px;
	text-decoration: none;
}

.button-grey:hover,
.btn-action:hover {
	text-decoration: none;
	background: -webkit-gradient(linear, 0 0, 0 100%, from(#E4E4E3), to(#F5F6F6));
	background: -moz-linear-gradient(#E4E4E3, #F5F6F6);
	background: -o-linear-gradient(#E4E4E3, #F5F6F6);
	background: linear-gradient(#E4E4E3, #F5F6F6);
}


/******************************
	Users List
*******************************/

.ossn-users-list-item .users-list-controls {
	margin-top: 20px;
}

.ossn-users-list-item .users-list-controls a {
	margin-left: 5px;
}

.ossn-users-list-item {
	border: 1px solid lime;
	margin-bottom: 10px;
	margin-right: -10px;
	margin-left: -10px;
}

.ossn-users-list-item .uinfo a {
	font-size: 14px;
	font-weight: bold;
	margin-top: 20px;
	float: left;
	text-overflow: ellipsis;
	max-width: 300px;
	white-space: nowrap;
	overflow: hidden;
}

.ossn-users-list-item .col-lg-2 {
	text-align: center;
}


/*********************************
	Footer
**********************************/

footer {
	margin-top: 20px;
	padding-top: 5px;
}

footer .col-lg-11 {
	border-top: 1px solid #E8E8E8;
}

footer .container {}

footer .ossn-footer-menu {
	padding-bottom: 10px;
}

footer .ossn-footer-menu a {
	color: #807D7D;
	font-size: 13px;
}

footer .ossn-footer-menu a::after {
	content: "|";
	margin-left: 10px;
	margin-right: 10px;
}

footer .ossn-footer-menu a:nth-last-child(2)::after,
footer .ossn-footer-menu a:last-child::after {
	content: "";
}

.menu-footer-powered {
	float: right;
}

.menu-footer-powered:after {
	display: none;
}

.menu-footer-a_copyrights {
	text-transform: uppercase;
}


/****************************
	Home
****************************/

.home-left-contents {}

.home-left-contents .logo {
	text-align: center;
}

.home-left-contents .description {
	font-size: 17px;
	text-transform: uppercase;
	font-weight: bold;
	margin-top: 20px;
	text-align: justify;
	color: #000000;
}

.home-left-contents .buttons {
	text-align: center;
	margin-top: 10px;
}

#ossn-home-signup p {
	margin-top: 10px;
}

#ossn-home-signup .radio-block {
	margin-top: 0;
	margin-bottom: 0;
}

#ossn-home-signup .ossn-form-group-half:last-child {
	float: right;
}

#ossn-home-signup .form-group {
	margin-bottom: 0px;
}


/**************************
	System
***************************/

.ossn-list-users {
	height: 60px;
	border-bottom: 1px solid lime;
	display: block;
	margin-left: 5px;
	margin-bottom: 10px;
}

.ossn-list-users img,
.ossn-list-users .uinfo {
	display: inline-block;
}

.ossn-list-users .uinfo .userlink {
	font-size: 14px;
	font-weight: bold;
	float: right;
	margin-left: 12px;
	text-overflow: ellipsis;
	width: 370px;
	white-space: nowrap;
	overflow: hidden;
}

.ossn-list-users .friendlink {
	float: right;
	margin-top: 10px;
	margin-right: 9px;
	text-overflow: ellipsis;
	width: 280px;
	white-space: nowrap;
	overflow: hidden;
}

.sidebar-menu-nav .sidebar-menu .menu-content {
	display: block;
}

.ossn-box-inner {
	width: 435px;
}

.landing-page-icons {
     color: #000000;
     text-align: center;
     margin-top: 30px;
}
.landing-page-icons-span {
     border: 3px solid;
     border-radius: 50px;
     display: inline-block;
     width: 90px;
     text-align: center;
     padding-top: 20px;
     padding-bottom: 20px;
     margin: 10px;
}
.landing-page-icons-span .fa {
     margin-right: 0px;
}


/**************************
	Similies
**************************/

.ossn-smiley-item {
	display: inline-block !important;
	margin-left: 2px;
	margin-right: 2px;
	width: initial !important;
	margin-bottom: 0px !important;
	margin-top: 0px !important;
	border: 0px !important;
}


/**************************
	Embed
 **************************/

.ossn_embed_video {
	margin-top: 10px;
	margin-bottom: 10px;
	padding-top: 0px;
}


/**************************
	Photos
***************************/

.ossn-photo-viewer .image-block img,
.ossn-photo-viewer {
	max-width: 100% !important;
}

.ui-draggable {
	opacity: 0.7;
}


/**************************
	Mobile Layout Settings
***************************/

@media (max-width: 480px) {
	.profile-hr-menu ul li {
		padding: 10px 0;
	}

	.ossn-wall-privacy-dummy,
	.ossn-wall-privacy {
		float: none;
		margin-right: 0;
	}

	.ossn-wall-container .controls {
		height: auto;
	}

	.ossn-wall-container textarea {
		margin-left: 0px;
		width: 100%;
	}

	/***********************
    	Comments
     ***********************/
	.comments-list .comments-item .comment-user-img {
		display: none;
	}

	.comments-item .col-lg-11 {
		padding-left: 15px;
	}

	/************************
    	Wall
     ************************/
	.ossn-wall-item-type {
		display: block;
	}

	.ossn-list-users .uinfo .userlink {
		text-overflow: ellipsis;
		width: 195px;
		white-space: nowrap;
		overflow: hidden;
	}

	.ossn-list-users a.right.btn.btn-primary {
		display: none;
	}

	.ossn-list-users a.right.btn.btn-danger {
		display: none;
	}

	.ossn-message-box .contents {
		height: 280px;
		overflow-x: auto;
		overflow: overlay;
	}

	/***************************
    	Topbar notification box
   *****************************/
	.ossn-notifications-box {
		width: 300px;
	}

	.ossn-notifications-box .notfi-meta {
		width: 210px;
	}

	.notification-friends .notfi-meta a {
		width: 100px;
	}

	.ossn-notification-messages .user-item .data {
		width: 215px !important;
	}

	.ossn-notification-messages .user-item .data .name {
		width: 110px !important;
	}

	.ossn-notification-messages .reply-text-from {
		width: 200px !important;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}

	/******************************
    	Profile
    ********************************/
	.ossn-profile .profile-photo img {
		width: 100px;
		height: 100px;
	}

	.ossn-profile .user-fullname {
		font-size: 16px;
		margin-left: 135px;
		margin-top: -100px;
		width: 140px;
	}

	.ossn-profile .top-container .profile-cover {
		height: 188px;
	}

	.ossn-profile .profile-photo {
		margin-top: -130px;
	}

	.profile-menu {
		float: right;
		margin-right: 10px;
	}

	.ossn-profile .top-container .profile-cover img {
		width: auto;
	}

	.ossn-group-cover-button,
	.profile-cover-controls {
		display: none !important;
	}

	.upload-photo {
		width: 100px;
	}

	.profile-hr-menu ul li {
		display: block;
		border-bottom: 1px solid rgb(238, 238, 238);
		margin-right: 0px;
		margin-left: 10px;
	}

	.profile-hr-menu ul li a:not(.dropdown a) {
		margin-right: 0px;
		padding: 10px;
	}

	.ossn-profile-role {
		display: none;
	}

	/*****************************
     	System
     *****************************/
	.ossn-users-list-item img {
		display: none;
	}

	.ossn-users-list-item .users-list-controls {
		margin-top: 10px;
		margin-bottom: 10px;
	}

	.ossn-users-list-item .uinfo a {
		margin-top: 10px;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
		max-width: 90px;
	}

	.ossn-search-page .ossn-users-list-item .uinfo a {
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
		max-width: 100px;
	}

	.ossn-system-messages {
		padding-left: 15px;
		padding-right: 15px;
	}

	.ossn-users-list-item {
		padding-bottom: 10px;
	}

	.ossn-widget .widget-contents {
		padding: 5px;
	}

	.ossn-message-box {
		min-width: 300px;
		width: 300px;
	}

	.ossn-box-loading {
		margin-left: 0;
		margin-top: 0;
        margin: 40px auto;
	}

	.ossn-message-box .contents input[type="text"] {
		width: 195px;
	}

	.ossn-box-inner {
		width: 280px;
	}

	footer .ossn-footer-menu a:nth-last-child(2)::after {
		content: "|";
	}

	/**********************
    	Groups
    ************************/
	.ossn-group-cover {
		height: 100px !important;
	}

	.ossn-group-cover-header,
	.ossn-group-profile .profile-header,
	.ossn-group-profile .profile-header .header-bottom {
		height: auto !important;
	}

	.ossn-group-profile .profile-header {
		max-height: inherit !important;
	}

	.ossn-group-profile .profile-header .group-name {
		float: none !important;
	}

	.group-name {
		width: 100%;
	}

	.group-header-sep {
		height: auto !important;
		text-align: center;
	}

	.ossn-group-members {
		margin-left: 15px;
		margin-right: 15px;
	}

	.ossn-group-members .request-controls,
	.ossn-group-members .uinfo {
		display: block;
	}

	.ossn-group-members .uinfo .userlink {
		margin-left: 10px;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}

	.sidebar-menu-nav .sidebar-menu .menu-content {
		display: block;
	}

	.sidebar-hide-contents-xs {
		display: none;
	}

	.home-left-contents .landing-page-icons {
		display: none;
	}

	/**************************
     	Layouts
     ****************************/
	.newsfeed-right {
		display: none;
	}

	.newsfeed-middle-top {
		display: block;
	}


	.ossn-messages .message-inner .row {
		margin-left: 0px !important;
	}

	/*************************
     	Home Page
     **************************/
	.logo img {
		width: 260px;
	}

	.home-left-contents .description {
		font-size: 16px;
	}

	.home-left-contents {
		margin-bottom: 20px;
	}

	/*****************************
    	Wall Menu
    ******************************/
	.dropdown-menu {
		margin-left: -110px;
	}

	.menu-footer-powered {
		float: none;
	}
}


/***************************************
	Tablets
****************************************/

@media only screen and (max-width: 992px) {
	.dropdown-menu {
		margin-left: -110px;
	}

	.ossn-profile .user-fullname {
		max-width: 500px;
	}

	/***********************
    	Comments
     ***********************/
	.comments-list .comments-item .comment-user-img {
		display: none;
	}

	.comments-item .col-lg-11 {
		padding-left: 15px;
	}

	/**************************
     	Layouts
     ****************************/
	.newsfeed-right {
		display: none;
	}

	.newsfeed-middle-top {
		display: block;
	}

	/*******************
     	Messages
     *******************/

	.ossn-messages .message-inner .row {
		margin-left: 0px !important;
	}

	.sidebar-menu-nav .sidebar-menu .menu-content {
		display: block;
	}
}

@media only screen and (max-width: 1199px) {

	.comments-list .comments-item .col-lg-1,
	.comments-list .comments-item .comment-user-img {
		display: none;
	}

	.comments-list .comments-item .col-lg-11 {
		width: 100%;
	}

	.comments-item .col-lg-11 {
		padding-left: 15px;
	}

	.group-search-details {
		margin-left: 10px;
	}

	.ossn-search-page .ossn-users-list-item .uinfo {
		margin-left: 35px;
	}

	.ossn-search-page .ossn-users-list-item .uinfo a {
		text-overflow: ellipsis;
		max-width: 200px;
		white-space: nowrap;
		overflow: hidden;
	}

	.ossn-users-list-item .users-list-controls {
		margin-bottom: 10px;
	}

	.ossn-profile .user-fullname {
		max-width: 640px;
	}
}

@media only screen and (max-width: 767px) {
	.ossn-profile .user-fullname {
		max-width: 767px;
	}

	.ossn-search-page .ossn-users-list-item .uinfo {
		margin-left: 0;
	}
}


/*****************************************************
		Adding icons for some 3rd party components
******************************************************/

.sidebar-menu-nav ul .sub-menu li:before {
	font-family: 'Font Awesome 5 Free';
	display: inline-block;
	padding-left: 10px;
	padding-right: 10px;
	vertical-align: middle;
}

.menu-section-item-groups:before {
	content: "\f07b" !important
}

@media screen and (min-width:1500px) {
	.ossn-wall-container .wall-tabs i {
		margin-top: 3px;
	}
}

.btn-close {
	background-size: .7em;
}

.img-responsive {
	display: block;
	max-width: 100%;
	height: auto;
}

/*************************
	3.x buttons styles
***************************/
.btn-close:focus {
	box-shadow: none;
}

.btn-warning {
	color: #000000;
}

.btn-primary {
	background-color: #000000;
	border-color: lime;
}

.btn-primary:hover {
	color: #000000;
	background-color: #000000;
	border-color: lime;
}

.btn-primary:focus,
.btn-primary.focus {
	color: #000000;
	background-color: #000000;
	border-color: yellow;
}

.btn-check:checked+.btn-primary:focus,
.btn-check:active+.btn-primary:focus,
.btn-primary:active:focus,
.btn-primary.active:focus,
.show>.btn-primary.dropdown-toggle:focus {
	box-shadow: none;
}

.btn:focus {
	box-shadow: none;
}

.btn-warning {
	color: #000000;
	background-color: YELLOW;
	border-color: lime;
}

.btn-warning:active {
	color: #000000;
}

.btn-warning:focus,
.btn-warning.focus {
	color: #000000;
	background-color: #ec971f;
	border-color: yellow;
}

.btn-default {
	color: #000000;
	background-color: #000000;
	border-color: lime;
}

.btn-default:focus,
.btn-default.focus {
	color: #000000;
	background-color: #000000;
	border-color: yellow;
}

.btn-default:hover {
	color: #000000;
	background-color: #000000;
	border-color: yellow;
}

.btn-default:active,
.btn-default.active,
.open>.dropdown-toggle.btn-default {
	color: #000000;
	background-color: #000000;
	border-color: lime;
}

.pagination {
	margin: 20px 0;
}

.dropdown-item.active,
.dropdown-item:active {
	color: #212529;
	background-color: #000000;
}

.page-item.active .page-link {
	background-color: lime;
	border-color: lime;
}

.page-link {
	color: lime;
}

.page-link:hover {
	color: #23527c;
	background-color: lime;
	border-color: yellow;
}

label {
	display: inline-block;
	max-width: 100%;
	margin-bottom: 5px;
	font-weight: 700;
}

.dropdown-menu {
	box-shadow: 0 12px 28px 0 rgba(0, 0, 0, 0.20), 0 2px 4px 0 rgba(0, 0, 0, 0.1), inset 0 0 0 1px rgba(255, 255, 255, 0.5);
}
/**********************
rgx settings
**********************/

hr {background-color: lime;
	height:2px
}

td {padding:0in 5.4pt 0in 5.4pt;
	text-align: center;
}

a {text-decoration: underline;
   text-underline-offset: 6px;
}
a:link { 
  text-decoration: none; 
} 
a:visited { 
  text-decoration: none; 
} 
a:hover { 
  text-decoration: none; 
} 
a:active { 
  text-decoration: none; 
}

/* Font Style Definitions */

.Rgx12 {
	font-size:12.0pt;
}

.Rgx12b {
	font-size:12.0pt;
	font-weight:bold;
}

.Rgx14 {
	font-size:14.0pt;
}

.Rgx14b {
	font-size:14.0pt;
	font-weight:bold;
}

.Rgx20 {
	font-size:20.0pt;
	letter-spacing:2.0pt;
}

.Rgx20b {
	font-size:20.0pt;
	line-height: 0.5;
	letter-spacing:2.0pt;
	font-weight:bold;
}

.Rgx24 {
	font-size:24.0pt;
	letter-spacing:2.0pt;
}

.Rgx24b {
	font-size:24.0pt;
	letter-spacing:2.0pt;
	font-weight:bold;
}

.Rgx36 {
	font-size:36.0pt;
	line-height: 0.2;
}

.Rgx36b {
	font-size:36.0pt;
	line-height: 0.2;
	font-weight:bold;
}

.Rgx48 {
	font-size:48.0pt;
	line-height: 0.2;
	letter-spacing:8.0pt;
}

.Rgx48b {
	font-size:48.0pt;
	line-height: 0.2;
	letter-spacing:8.0pt;
	font-weight:bold;
}

/* Slideshow */
  .slideshow-container {
    width: 300px;
    height: 200px;
    max-width: 300px;
    max-height: 200px;
    position: relative;
    margin: auto;
  }

  .Slideshow-Image {
    max-width: 300px;
    max-height: 200px;
    position: relative;
    margin: auto;
  }

  /* Hide the images by default */
  .mySlides {
    display: none;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
  }

  /* Fading animation */
  .fade {
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }