<?php
header('Content-type: text/css');
include("../include/config.php");
$imageurl = $config['imageurl'];
?>
.main-wrapper {
background:#fff!important;
overflow:hidden;
width:860px;
margin-top:40px;
}

.content-text {
overflow:hidden;
width:565px!important;
float:left;
}

.content-text .attachment {
background:url(<?php echo $imageurl; ?>/attach.png) no-repeat 0 2px!important;
width:16px;
height:16px;
float:left;
margin-right:5px;
}

.page-title {
overflow:hidden;
color:#555!important;
position:relative;
padding:10px 0;
}

.page-title h2,.page-title h3 {
font-weight:400;
line-height:24px!important;
letter-spacing:-1px;
margin:0;
}

.page-title h2 {
font-size:24px;
position:relative;
}

.page-title h2 a {
color:#555;
text-decoration:none;
}

.page-title .quicknav {
position:absolute;
top:0;
right:0;
margin-top:10px;
}

.page-title .quicknav select {
width:150px;
}

.manage {
width:98%;
overflow:hidden;
margin:0!important;
padding:0!important;
}

.tabSet {
overflow:hidden;
position:relative;
margin:0 10px;
}

.tabSet div {
float:left;
cursor:pointer;
height:24px;
width:150px;
line-height:24px;
text-align:center;
margin:0 1px 0 0;
}

.tabSet div.tabControlShopping {
background:#ddc;
border-bottom:1px solid #fff;
}

.tabSet div.tabControlShopping:hover {
background:#ccb;
}

.tabSet div.tabControlShopping.selected:hover {
background:#ddc!important;
}

.tabSet .tabControlShopping.selected {
border-bottom:1px solid #ddc!important;
}

.tabSet div.tabControlSales {
background:#e4ecee;
border-bottom:1px solid #fff;
}

.tabSet div.tabControlSales:hover {
background:#cdd;
}

.tabSet div.tabControlSales.selected:hover {
background:#e4ecee!important;
}

.tabSet .tabControlSales.selected {
border-bottom:1px solid #dee!important;
}

.tabs .yellow.index tbody td {
border-bottom:1px solid #eee;
color:#666;
}

.tabs .yellow .info {
border:1px solid #DCDCCA;
background:#DCDCCA;
border-bottom:1px solid #CCCCBA!important;
color:#5C5C5A;
font-weight:700;
text-shadow:none;
margin:0 0 10px;
padding:10px 10px 10px 13px;
}

.tabs .green.index tbody td {
border-top:1px solid #eee;
color:#666;
}

.tabs .green .info {
border:1px solid #E4ECEE;
background:#E4ECEE;
color:#577;
font-weight:700;
text-shadow:#eff 1px 1px;
border-bottom:1px solid #D4DCDE!important;
margin:0 0 10px;
}

.index table {
font-family:Arial;
border-collapse:collapse;
}

.index table td {
font-size:14px;
vertical-align:top;
background-position:10px 2px!important;
line-height:18px;
padding:2px 0;
}

.index thead {
border-bottom:1px solid #eee;
}

.index thead td {
background:#fff!important;
font-size:10px;
text-transform:uppercase;
line-height:33px;
background-position:8px 8px!important;
color:#758f8f;
font-weight:700;
text-align:left!important;
border-bottom:1px solid #eee;
}

.index thead td.first {
background-position:0 8px!important;
text-align:left!important;
padding:0 0 0 5px !important;
}

.index tbody td.first div {
text-align:left!important;
}

.index thead td.last {
text-align:right!important;
}

.index .info {
overflow:hidden;
margin:0!important;
padding:5px 5px 5px 13px;
}

.index .info span.left {
float:left;
line-height:24px;
color:#545C5E;
text-shadow:none;
}

.index .info span.right {
float:right;
background:#fff;
border:1px solid #bcc;
padding:4px 6px;
}

.index .info span.right a {
text-decoration:none;
text-shadow:none;
}

.index .info span.right:hover {
background:#008dcd;
border:1px solid #008dcd;
padding:4px 6px;
}

.index .info span.right em {
font-style:normal;
}

.index .info span.right.disabled {
background:#fafafa;
border:1px solid #dadada;
cursor:text!important;
padding:4px 6px;
}

.index .info span.right.disabled a {
cursor:text!important;
color:#aaa;
}

.tabSales .entry td b {
width:150px!important;
float:left;
font-weight:400;
color:#888;
}

.index td.id {
text-align:left;
vertical-align:middle;
font-size:13px;
padding:0 10px 0 0 !important;
}

.index td.status {
text-align:center;
text-transform:lowercase;
vertical-align:middle;
width:70px;
}

.index td.status div {
font-size:9px;
vertical-align:middle;
text-transform:uppercase;
font-weight:700;
cursor:default;
line-height:18px;
color:#fff;
min-width:63px;
padding:0 4px;
}

.index td.status.revenue div {
background:#cfd!important;
font-size:11px!important;
color:#0a1;
}

.index td.status.paypal.deposit div {
width:100px;
background:blue;
}

.index td.order {
text-align:center;
padding:0!important;
}

.index td.gross {
text-align:right;
vertical-align:middle;
}

.index td.gross div {
font-family:Georgia;
font-size:16px!important;
line-height:22px;
padding-left:5px;
}

.index td.gig div b {
color:#888;
font-weight:400;
}

.index td.datetime {
vertical-align:middle;
text-align:left;
}

.index td.datetime div {
overflow:hidden;
word-wrap:break-word;
font-size:13px;
color:#666;
width:50px;
float:right;
line-height:16px;
}

.index td.gig b {
width:100px!important;
float:left;
}

b.order-id u {
text-decoration:none;
width:140px!important;
margin-left:5px;
}

.index td.first {
text-align:left!important;
padding:0 0 0 5px !important;
}

.index td.last {
text-align:right!important;
padding:0 5px 0 0 !important;
}

.index tr.entry:hover td {
background:#f7f7f7!important;
}

.index td {
background:#fafafa;
height:24px!important;
vertical-align:middle!important;
line-height:14px!important;
}

.index td.username {
width:130px!important;
}

.index td.username div.dimmed a {
color:#888!important;
}

.index td.username b {
float:right;
margin-right:10px;
font-weight:400;
color:#aaa;
}

.index td a {
text-decoration:none;
color:#666;
}

.index td a:hover {
text-decoration:underline;
color:#008DC7;
}

.with-attachment {
background:url(<?php echo $imageurl; ?>/page_white_text.png) no-repeat right;
padding-right:20px;
line-height:16px;
}

h3.flag {
background:none!important;
border:none!important;
min-width:63px;
margin:0 0 5px!important;
padding:0!important;
}

h3.flag b {
margin-left:4px;
}

h3.flag span.status {
color:#fff;
display:block;
float:left;
font-size:10px!important;
line-height:14px;
padding:0 4px;
}

h3.flag span b {
border-left:1px solid #fff;
padding-left:6px;
font-weight:400;
}

h3.flag span.status.waiting-for-reqs,.waiting_for_reqs div {
background:#fa0!important;
}

h3.flag span.status.in-progress,h3.flag span.status.pending,.in_progress div {
color:#96b7cb!important;
border:1px solid #96b7cb;
}

h3.flag span.order-cancelled,h3.flag span.status.cancelled,.cancelled div,.cancelled_by_mutual_agreement div,.seller_cancelled div {
color:#888!important;
border:1px solid #888;
}

.payapl_reversal div,.admin_cancelled div,.buyer_cancelled div {
color:#f77673!important;
border:1px solid #f77673;
}

h3.flag span.status.order-completed,h3.flag span.status.completed,.completed div {
color:#35b982!important;
border:1px solid #35b982;
}

h3.flag span.status.late-delivery,.late_delivery div {
background:#f44!important;
color:#fff!important;
}

.mutual_cancellation_requested_by_buyer div,.mutual_cancellation_requested_by_seller div,.late_delivery_no_res div {
background:#f44!important;
color:#fff;
}

h3.flag span.status.order-rejected,h3.flag span.status.rejected,.rejected div,.dispute div {
background:#f77673;
color:#fff;
}

.clearing div {
background:#e2f8e0;
color:#3a5!important;
}

.clearing div u {
text-decoration:none;
color:#3a5;
}

.withdrawn div {
background:#ddc2d8;
color:#fff;
}

.withdrawal div {
background:#b793a9;
color:#fff;
}

.reversal div {
background:#35b982;
color:#fff!important;
}

.clearance div,.refund div,.revenue div,.balance div {
background:#000;
color:#fff;
}

.status.paypal div {
background:#f44;
color:#fff;
}

.status.upcoming div {
border:1px solid #a0cc8a;
color:#a0cc8a!important;
}

.status.deposit div {
background:#b2bfc0;
color:#fff;
}

.status.payment div {
background:none;
border:1px solid #aaa;
color:#888!important;
}

.complete-rating p.subtitle {
float:left;
margin-right:4px!important;
}

.thumb-up p.buyer-comment {
float:left;
background:url(<?php echo $imageurl; ?>>/thumb_up.png) no-repeat!important;
padding-left:24px;
}

.thumb-down p.buyer-comment {
float:left;
background:url(<?php echo $imageurl; ?>/thumb_down.png) no-repeat!important;
padding-left:24px;
background-position:0 -1px!important;
}

ul.filters {
overflow:hidden;
border:1px solid #dadada;
border-right:none;
border-left:none;
position:relative;
border-bottom:1px solid #eee;
border-top:1px solid #eee;
margin:0;
padding:4px 0;
}

ul.filters li {
list-style:none;
float:left;
margin:0 5px 0 0;
padding:0 5px 0 0;
}

ul.filters li:hover a span {
background:#fff;
color:#008dc7;
border:1px solid #008dc7;
}

ul.filters li:hover a span u {
color:#008dc7!important;
}

ul.filters span {
background:#008dc7;
display:block;
color:#fff;
border:1px solid #008dc7;
padding:1px 10px;
}

ul.filters a span {
background:#fff;
border:1px solid #ddd;
color:#888;
}

ul.filters li.last {
border-right:none;
}

ul.filters span u {
text-decoration:none;
font-size:10px;
font-weight:700;
color:#77d1fd;
margin-left:5px;
}

ul.filters a span u {
text-decoration:none;
font-size:10px;
font-weight:700;
color:#bbb!important;
}

ul.filters li.quick-nav {
float:right;
position:absolute;
right:0;
top:2px;
margin:0;
padding:0;
}

h2.balance {
font-weight:700;
color:#008DC7;
font-size:22px;
letter-spacing:0;
margin:0 0 5px;
}

.page-title h2 span,b.balance {
display:block;
font-family:Arial!important;
font-weight:400!important;
font-size:12px!important;
line-height:16px;
color:#888;
letter-spacing:0;
margin:2px 0 0!important;
}

b.balance a:hover {
color:#12961e;
text-decoration:underline;
}

b.balance img {
width:93px!important;
height:29px!important;
background:none!important;
border:none!important;
padding:0!important;
}

h2.richer {
background:url(<?php echo $imageurl; ?>/rich-baloon.png);
position:absolute;
width:221px;
height:49px;
top:-40px;
right:70px;
margin:0;
padding:0;
}

h2.richer span {
display:block;
font-size:14px;
color:#637c83;
font-family:Georgia;
font-style:italic;
font-weight:400;
line-height:18px;
padding:6px 30px 10px;
}

h2.richer span b {
font-weight:400;
color:#435c63;
}

.stats {
overflow:hidden;
border:1px solid #e4ecee!important;
border-top:1px solid #fff!important;
background:#f4fcfe;
padding:20px;
}

.stats .pane {
float:left;
font-size:16px;
width:100%;
padding-bottom:10px;
border-bottom:1px solid #e4ecee;
}

.stats .pane.last {
padding-top:10px;
margin-bottom:0;
padding-bottom:0;
border-top:1px solid #fff;
border-bottom:none;
}

.stats h3 {
float:left;
font-size:15px;
font-weight:400;
width:33%;
color:#646c6e;
line-height:16px;
text-shadow:#fff 1px 1px;
margin:0;
}

.stats h3 b {
font-weight:400;
margin-right:4px;
font-size:17px;
font-family:Georgia;
}

.stats h3 span {
font-size:11px;
color:#888;
padding-right:20px;
font-weight:400;
display:block;
margin:4px 0 0;
}

.stats.shopping {
background:#fcfde7;
}

.stats .notice p {
font-weight:700;
color:#737369;
text-shadow:#fff 1px 1px;
}

h3.available b {
color:#35b982;
}

h3.pending b {
color:#39a;
}

h3.withdrawn b {
color:#b783a8;
}

h3.paid-by b {
color:#bd9b83;
}

span.highlight {
color:#f44;
background:#ffb;
}

p.checkbox input {
vertical-align:top;
font-size:16px;
margin:0 5px 0 0;
}

.info.order {
margin-bottom:10px;
overflow:hidden;
position:relative;
}

a.back-to-manage {
text-decoration:none;
font-size:12px;
padding:0 4px;
}

a.back-to-manage:hover {
background:#008dc7;
color:#fff;
text-decoration:none;
}

.milestone {
overflow:hidden;
background:#f7f7f7;
float:right;
width:610px;
margin:0 0 10px;
}

.status-label {
width:47px;
min-height:40px;
float:left;
}

.mutual-status {
background:#f7f7f7!important;
min-height:22px;
float:right;
width:542px;
line-height:22px;
color:#666;
font-size:14px;
margin:0;
padding:10px;
}

.milestone.mutual-status span {
background-position:4px 2px!important;
color:#777;
line-height:14px;
}

.milestone h3 {
border:none!important;
text-transform:uppercase;
font-weight:700!important;
font-size:11px!important;
text-shadow:#fff 1px 1px;
line-height:12px!important;
overflow:hidden;
margin:0 0 10px!important;
}

.milestone h3 b {
float:right;
font-weight:400;
color:#888;
}

.milestone h3.seller {
color:#666!important;
padding-bottom:0;
}

.milestone.okay h3 {
color:#89ad27;
}

.milestone.warning h3,.milestone.action h3,.milestone.deliver h3,.milestone.cancel h3 {
color:#a44;
}

.milestone.warning {
background:#fff6c7 url(<?php echo $imageurl; ?>/warning.png) no-repeat -2px 50%;
}

.milestone.deliver {
background:#70ff3f url(<?php echo $imageurl; ?>/success.png) no-repeat 4px 50%;
}

.milestone.cancel {
background:#ffe3d2 url(<?php echo $imageurl; ?>/cancel.png) no-repeat .5% 50%;
}

.milestone.warning .mutual-status {
border-left:1px solid #ded7ac;
}

.milestone.deliver .mutual-status {
border-left:1px solid #dfb700;
}

.milestone.cancel .mutual-status {
border-left:1px solid #efb490;
}

.toolbox {
margin:0 10px;
}

.toolbox .topic {
display:block;
font-size:11px;
margin-bottom:10px;
padding:0;
}

.toolbox .topic a.achtung:hover {
color:#f44!important;
text-decoration:underline!important;
}

.toolbox .topic a.selected {
text-decoration:none;
z-index:1000!important;
color:#f44;
}

.boxes {
overflow:hidden;
margin-bottom:10px;
padding:0;
}

.boxes .box {
text-align:center!important;
float:left;
width:29%;
position:relative;
height:135px;
border:1px solid #f0f0f0;
margin:0 2px 0 0;
padding:10px;
}

.boxes .box.last {
float:right;
margin:0;
}

.boxes .box:hover {
cursor:pointer;
}

.boxes .box h3 {
font-size:18px!important;
color:#8c9a9f!important;
letter-spacing:-1px;
min-height:50px;
line-height:20px;
text-align:left;
border-bottom:1px solid #ccdadf;
text-shadow:#fff 1px 1px;
background:none!important;
border-top:none!important;
margin:0!important;
padding:0 0 10px!important;
}

.boxes .box p {
border-top:1px solid #fff;
text-align:left;
color:#8c9a9f;
font-size:14px;
margin:0;
padding:10px 0 0;
}

.boxes .box a {
text-decoration:none;
position:absolute;
bottom:10px;
left:10px;
border:none;
background:none;
color:#8c9a9f;
cursor:pointer;
font-weight:700;
padding:0;
}

.boxes .box.selected h3,.boxes .box.selected p,.boxes .box.selected a.a-input {
color:#a44!important;
text-shadow:#fff 1px 1px;
visibility:visible!important;
}

.box.selected {
background:#fafafa;
border:1px solid #e0e0e0;
}

.box h3 input {
position:absolute;
top:0;
left:0;
}

.box h3 span {
padding-left:30px;
float:left;
}

.respond div.content-text {
padding-top:10px!important;
background:#e4f1f5!important;
padding-bottom:14px;
}

.respond .confirm {
width:525px!important;
margin:10px 0;
}

div.confirm.mutual-status {
background:#dceaef;
border:none;
border-bottom:none!important;
width:100%!important;
float:none;
margin:0!important;
padding:0;
}

div.confirm.mutual-status.duedate span {
background:none;
color:#008dc7;
display:block;
margin:0 10px 6px;
padding:10px 0;
}

label.delivery-checkbox {
position:relative;
padding-left:24px;
margin-top:7px;
overflow:hidden;
float:left;
}

label.delivery-checkbox input {
position:absolute;
left:0;
top:1px;
margin:0 5px;
padding:0;
}

.reqbox .message-content {
min-height:120px;
}

.reqbox h4 {
font-size:18px!important;
letter-spacing:-1px;
font-weight:400;
margin:0;
}

.delivery-box {
padding-right:0;
position:relative;
float:left;
width:565px;
}

.delivery .message-inner {
background:#d6f8da url(<?php echo $imageurl; ?>/delivery-rays.png) no-repeat!important;
background-position:160px -50px!important;
padding:10px!important;
}

.delivery-box .message-inner {
min-height:140px;
}

.delivery .reqbox .says h4 {
color:#55817b;
text-shadow:#f6f8fa 1px 1px;
text-transform:uppercase;
font-weight:700;
}

.delivery .reqbox .said {
margin-bottom:30px;
padding:0;
}

.delivery-footer {
border-top:1px solid #bad8bd;
padding-top:8px;
bottom:10px;
width:95%;
overflow:hidden;
position:absolute;
}

.delivery h5 {
font-weight:400;
width:60%;
float:left;
font-size:12px;
color:#508056;
margin:0;
}

.delivery h6 {
float:right;
text-align:right;
width:30%;
margin:0;
}

.img-delivery {
background:url(<?php echo $imageurl; ?>/delivery-box.png) no-repeat;
position:absolute;
right:-15px;
top:-5px;
width:140px;
height:105px;
z-index:100;
}

.post-order-rating p {
float:left;
margin:0 10px 0 0;
}

.post-order-rating textarea {
height:100px;
width:520px!important;
margin-left:0!important;
}

div.share-experience p {
color:#888;
font-style:italic;
margin:0 0 5px;
}

textarea#rating_comment {
width:545px;
color:#777;
font-family:Arial;
margin:5px 0 0;
padding:5px;
}

#comment_maxlength300cols15rows5 {
margin:0 0 10px!important;
}

.order-finish {
overflow:hidden;
clear:right;
width:560px;
float:right;
margin:0 0 10px;
}

.order-finish input.button {
margin-top:5px;
}

.respond-to-start {
text-align:center;
float:right;
margin-bottom:10px;
text-transform:uppercase;
color:#aaa;
width:420px;
overflow:hidden;
line-height:25px;
padding:10px;
}

.respond-to-start-l {
float:left;
text-transform:uppercase;
color:#aaa;
overflow:hidden;
line-height:25px;
}

.respond-to-start b {
float:left;
margin:0 20px;
}

span.arr-r {
background:url(<?php echo $imageurl; ?>/right-arrow.png) no-repeat;
width:25px;
height:25px;
float:left;
margin-right:10px;
}

span.arr-d {
background:url(<?php echo $imageurl; ?>/down-arrow.png) no-repeat;
width:25px;
height:25px;
float:left;
}

.index label {
font-size:10px;
text-transform:lowercase;
text-shadow:none;
cursor:pointer;
font-weight:400;
margin:0;
padding:2px 6px;
}

.message.by-me.respond form {
overflow:hidden;
clear:left;
}

.message.by-me.respond form .content-text {
width:565px;
}

.respond textarea {
background:#fff!important;
border:1px solid #ccdadf;
font-family:Arial;
font-size:20px;
color:#444;
width:532px;
margin:0 10px!important;
padding:5px;
}

.respond textarea:focus {
background:#fff!important;
border:1px solid #ccc;
}

p.related-gig {
font-size:11px;
font-weight:700;
line-height:16px;
margin:5px 0 10px;
}

p.related-gig span {
display:block;
padding:4px 8px;
}

.by-me p.related-gig span {
background:#d7eaef;
}

.by-partner p.related-gig span {
background:#e9ead7;
}

.attachment-add h3 {
font-size:12px!important;
color:#666!important;
border:none!important;
line-height:20px!important;
margin:0 0 1px!important;
}

.attachment-add h3 span {
display:block;
width:300px;
font-size:11px;
line-height:16px;
color:#888;
font-weight:400;
}

.attachment-add h3 b {
font-weight:400;
color:#999;
margin:2px 0;
}

.msg-error {
color:#B22;
display:none;
margin:0 10px;
}

.msg-error p {
font-size:12px;
font-weight:700;
margin:0 0 5px!important;
padding:2px;
}

.hint .msg-error p {
color:blue!important;
}

#fileInputUploader {
cursor:pointer!important;
background:url(<?php echo $imageurl; ?>/loader.gif) no-repeat center!important;
margin-top:5px;
height:26px;
width:82px;
}

.sections {
overflow:hidden;
clear:both;
}

ul.tabs {
overflow:hidden;
height:26px;
position:relative;
width:540px!important;
margin:0 0 0 60px !important;
padding:0;
}

ul.tabs li {
float:left;
list-style:none;
}

ul.tabs li a {
text-align:center;
margin-right:1px;
line-height:24px!important;
font-size:12px!important;
display:block;
text-decoration:none;
background:#e4f1f5!important;
font-weight:700;
padding:0 25px;
}

ul.tabs li.text-link {
background:none!important;
line-height:18px;
border:none;
float:right;
padding:2px 0!important;
}

ul.tabs li.text-link a {
color:#a44;
font-size:11px;
background:none!important;
position:absolute;
right:0;
width:100px;
line-height:24px!important;
padding:0 12px!important;
}

ul.tabs li.text-link.selected a {
background:#f0f0f0!important;
color:#a44;
}

ul.tabs li.text-link a.selected:hover {
background:#f0f0f0!important;
color:#a44;
text-decoration:none;
}

ul.tabs li.text-link a:hover {
color:#a44;
text-decoration:underline;
}

ul.tabs li.deliver a {
background:#d6f8da!important;
color:#457e41;
border-bottom:1px solid #fff;
}

ul.tabs li.text-link.selected a:hover {
background:#f0f0f0!important;
text-decoration:none;
cursor:text!important;
}

ul.tabs li.talk.selected a {
border-bottom:1px solid #e6f3f7!important;
}

ul.tabs li.deliver.selected a {
border-bottom:1px solid #c7ffb7!important;
}

ul.tabs li.talk.selected a:hover {
background:#e4f1f5!important;
text-decoration:none;
cursor:text!important;
}

.select-talk {
background:green!important;
}

.content-text.select-deliver .upload {
background-color:#d6f8da!important;
}

.respond .tip {
background:url(<?php echo $imageurl; ?>/msg-tips.png) no-repeat 0 21px!important;
}

.green-text {
color:#080!important;
font-style:italic;
text-shadow:none!important;
font-weight:400!important;
}

.green-text strong {
font-weight:400!important;
color:#080!important;
}

.reason-text {
color:#666!important;
font-style:italic;
text-shadow:none!important;
font-weight:400!important;
}

.no-data {
margin-top:15%;
text-align:kef;
}

.no-data h3 {
font-size:14px!important;
background:none!important;
padding:0!important;
}

div#gotProbs.content-text.select-gotprobs {
background-color:#f0f0f0!important;
}

div#gotProbs.content-text.select-deliver {
background:#d6f8da!important;
}

.box.disabled {
cursor:text!important;
}

.message-form-control {
position:relative;
clear:left;
min-height:30px;
float:left;
width:95%;
margin:3px 15px 0;
}

.message-form-control .send-button {
height:30px;
top:3px;
}

.message-form-control .upload-panel {
width:90%;
float:left;
}

.message-form-control .upload-panel h5 {
text-decoration:none!important;
float:left;
margin:8px 0 0;
}

.message-form-control .upload-panel p {
color:#71777a;
font-size:11px;
width:70%;
float:left;
margin:5px 0 0;
}

.select-deliver .message-form-control .upload-panel h5,.select-deliver .message-form-control .upload-panel p {
color:#376417;
}

.files-added,.files {
font-size:11px;
margin-bottom:10px!important;
}

.files h3 {
font-size:10px;
text-transform:uppercase;
margin:0 0 5px;
padding:0;
}

.files ul li {
list-style:none;
overflow:hidden;
float:left;
padding:0!important;
}

div.files ul li a,.files-added span {
background:#fff url(<?php echo $imageurl; ?>/page_white_text.png) no-repeat 3px 3px;
text-decoration:none!important;
font-size:12px;
word-wrap:break-word!important;
display:block;
line-height:20px;
float:left;
color:#777;
height:20px;
padding:2px 4px 2px 22px;
}

.delivery .files ul li a {
border:1px solid #c6e8ca;
}

.by-me .files ul li {
border:1px solid #ccdde2!important;
}

.by-partner .files ul li {
border:1px solid #ddc!important;
}

#attached_file_name {
border:1px solid #cad5d9;
}

.delivery span#attached_file_name:hover,div.files ul li a:hover b,div.files ul li a:hover {
color:#008dc7!important;
text-decoration:underline!important;
}

div.files-added b {
float:left;
font-weight:400;
}

#attached_file_name a b {
float:right;
margin-left:5px;
font-size:11px;
color:#aaa;
text-transform:lowercase;
}

div.files ul li a b {
font-size:11px;
text-transform:lowercase;
font-weight:400;
color:#aaa;
}

.crk {
border-top:1px solid red;
}

.files-added {
overflow:hidden;
display:none;
margin:0!important;
}

.select-deliver .upload-panel {
background:#d6f7da;
}

.upload-panel .files-added {
float:left;
margin-top:4px!important;
}

.uploadifyQueueItem {
position:absolute;
top:26px;
left:90px;
background:none!important;
border:none!important;
color:#444;
width:60%!important;
line-height:14px!important;
margin:0!important;
padding:0 0 0 20px !important;
}

.uploadifyQueueItem .cancel {
left:0!important;
top:3px;
position:absolute;
}

.uploadifyQueueItem span.fileName {
font-weight:700!important;
font-family:Arial!important;
}

.uploadifyQueueItem.uploadifyError {
background:none!important;
border:none!important;
}

.uploadifyQueueItem.uploadifyError span.fileName {
color:#f44!important;
text-decoration:line-through;
font-weight:400!important;
}

.uploadifyQueueItem .uploadifyProgress {
width:70px;
position:absolute;
top:14px;
left:20px;
background:#e4f1f5;
border:1px solid #ccdadf;
margin:0;
}

.uploadifyProgressBar {
border:none!important;
background:#fff;
padding:1px 0;
}

.remove_attachment {
cursor:pointer;
line-height:25px;
color:#a44;
margin-left:6px;
}

.remove_attachment:hover {
color:#f44;
}

.message {
float:left;
position:relative;
margin:0 0 10px!important;
padding:0!important;
}

.message-inner {
padding:10px 10px 0!important;
}

.message .author {
font-size:11px;
overflow:hidden;
}

.message .metadata {
float:left;
width:35px;
position:relative;
padding-right:10px;
}

.message textarea {
width:530px!important;
margin:0 10px!important;
}

.message.by-me .content-text {
color:#5c6a6f;
background:#e7faff;
}

.message.by-me .metadata {
color:#aaa;
line-height:17px;
padding-right:10px;
}

.message.by-partner .content-text {
color:#7b715c;
background:#f9f9e6;
}

.message.by-partner .metadata {
color:inherit;
line-height:17px;
}

.message-toolkit {
font-size:11px;
text-transform:lowercase;
text-align:right;
overflow:hidden;
margin-bottom:5px;
position:absolute;
right:10px;
bottom:0;
width:120px;
}

.message-toolkit a {
color:#aaaa9c;
text-decoration:none;
}

.message-toolkit a:hover {
text-decoration:underline;
color:#f44!important;
}

.message div.tip {
position:absolute;
width:15px;
height:20px;
top:8px;
left:35px;
background:url(<?php echo $imageurl; ?>/msg-tips.png) no-repeat 0 -61px!important;
}

.message.by-me .tip {
background-position:0 -41px!important;
}

.message.by-partner .tip {
background-position:0 -21px!important;
}

.rspnd.green {
background-position:2px 0!important;
}

#new_message div.by-me div.metadata div.tip.rspnd.rspnd-deliver {
background-position:0 -1px!important;
}

.status-icon,.buddyicon {
margin:3px 10px 0 0;
}

.status-icon,.buddyicon img {
border:1px solid #ddd;
width:25px;
height:25px;
padding:2px;
}

.info.order h2 {
font-size:22px;
letter-spacing:-1px;
font-weight:400;
line-height:28px;
float:left;
}

.info.order h2 a {
color:#555!important;
text-decoration:none;
}

.info.order h2 a:hover {
color:#008dc7;
text-decoration:underline;
}

.info.order h2 em {
font-weight:400;
font-style:normal;
color:#444!important;
display:block;
margin-bottom:5px;
}

.info.order img {
background:#f0f0f0;
border:1px solid #e0e0e0;
float:left;
height:72px;
width:102px;
margin:0 12px 0 0;
padding:2px;
}

.info.order h2 span {
margin-top:8px;
}

.info.order h2 span select {
width:200px;
font-size:11px!important;
text-shadow:#fff 1px 1px;
}

.info.order h3.controls {
background:none!important;
padding-left:0!important;
}

tr.entry td {
background:#fafafa!important;
border-bottom:1px solid #eaeaea!important;
}

.extended-data b.username {
float:left;
width:150px!important;
position:relative;
}

.extended-data b.username em {
position:absolute;
top:0;
right:4px;
text-decoration:none;
font-style:normal;
}

tr.entry.unread .unread-message {
float:right;
position:relative;
}

tr.entry.unread .unread-message span {
font-size:9px;
text-transform:uppercase;
background:#fe0;
color:#333;
font-weight:700;
line-height:14px!important;
display:block;
padding:0 4px;
}

.says,.said {
overflow:hidden;
padding-right:60px;
}

.says {
margin-bottom:10px;
}

.says p {
font-size:10px;
text-align:right;
margin:0;
}

.says p b {
font-weight:400;
margin-right:0;
float:left;
font-size:11px;
}

.said p {
font-size:14px;
margin:0 0 10px;
}

.reqbox .said p {
padding-right:130px!important;
}

.by-me .said {
color:#5c6a6f;
}

.by-partner .said {
color:#696956;
}

.by-me .says p {
color:#acbabf!important;
}

.by-partner .says p {
color:#cbc1ac!important;
}

.delivery .says p {
color:#9ba!important;
}

a.spam_message {
overflow:hidden;
cursor:pointer;
display:inline;
}

a.spam_message:hover span {
cursor:pointer;
display:inline;
}

em.reported {
margin:0 2px;
}

.info.chat h3 {
background:#f0f0f0!important;
}

.conversation .metadata h3 {
overflow:hidden;
border:1px solid #ddd;
border-right:none;
border-left:none;
font-weight:400;
font-size:11px;
line-height:25px;
color:#999;
position:relative;
margin:0 0 10px;
}

.metadata h3 span.right {
position:absolute;
right:0;
line-height:24px;
}

.metadata h3 a.conversation-link {
background:url(<?php echo $imageurl; ?>/page_white_text.png) no-repeat;
width:16px;
height:16px;
display:block;
margin-right:10px;
}

.metadata h3 p {
display:inline;
float:right;
margin:0;
}

.metadata h3.meta-details {
letter-spacing:0;
margin-top:10px;
margin-bottom:0;
}

.metadata h3.controls a {
background:#ccc;
color:#444;
text-decoration:none;
margin-right:7px;
padding:2px 4px;
}

.metadata h3.controls a:hover {
background:#333;
color:#fff;
}

.order-meta {
float:left;
width:455px;
}

.al-ordered {
position:relative;
margin:40px 20px 140px;
}

.al-ordered .btn {
margin-top:50px;
}

.al-ordered .btn .no {
position:relative;
float:left;
left:90px;
color:#999;
background-image:url(<?php echo $imageurl; ?>/btn-2-cancel.png);
background-repeat:no-repeat;
height:70px;
width:140px;
background-position:bottom;
}

.al-ordered .btn .yes {
position:relative;
float:right;
right:90px;
color:#999;
background-image:url(<?php echo $imageurl; ?>/btn-2-continue.png);
background-repeat:no-repeat;
height:70px;
width:140px;
background-position:bottom;
}

.box p {
color:#555;
font:1.1em arial,helvetica,sans-serif;
cursor:default;
margin:4px 0 3px;
}

.box p span {
font:.9em arial,helvetica,sans-serif;
}

.box p span,.box p span a {
color:#999;
}

.box p span a:hover {
color:#0095c0;
text-decoration:underline;
}

.image-frame {
width:24px;
height:24px;
border:1px solid #ddd;
background:#eee;
padding:1px;
}

.image-frame img {
width:24px;
height:24px;
}

.category-tags {
overflow:auto;
width:610px;
text-align:center;
margin:0 auto 10px;
}

.category-tags a {
display:inline-table;
vertical-align:middle;
margin:2px;
}

a.tag {
background:#86dbfb;
text-decoration:none;
font-size:13px;
font-weight:700;
color:#fff!important;
line-height:17px;
padding-bottom:1px;
}

.gig_filters {
background:#fdfdfd;
margin-bottom:10px;
border-bottom:1px dotted #eee;
padding:2px;
}

#new_gig div.edit-gig-form div.estimate div.column-r div {
float:left;
width:350px;
margin:0;
padding:0;
}

.additional-materials {
margin:20px 0 0;
}

#additional-visuals {
display:none;
margin:0;
padding:0;
}

label.new-badge b,a.new-bagde {
background:url(<?php echo $imageurl; ?>/new.png) no-repeat right center;
padding-right:20px!important;
}

label.new-badge b {
font-weight:400;
background-position:100% 0;
}

.help h3 {
font-size:14px;
float:left;
font-weight:700;
color:#444;
margin:0 10px 10px 0;
}

.help p {
line-height:16px;
margin:0;
}

.help .news {
background:#d7ffb7 url(<?php echo $imageurl; ?>/box-notes.png) no-repeat 10px 0;
border:1px solid #b7efa7;
padding:10px 10px 10px 70px;
}

.info-box {
border-left:1px solid #b4c1c5!important;
padding-left:10px;
float:right;
width:60%;
position:absolute;
right:0;
}

.info-box p {
font-size:12px;
color:#888;
line-height:16px;
margin:0;
}

.terms-list ul {
list-style:square;
margin:0 0 30px;
padding:0 0 0 30px;
}

.terms-list ul li {
margin:0 0 8px;
}

.terms-list h2 {
border-bottom:1px solid #eee;
padding-bottom:10px;
font-weight:700;
letter-spacing:-1px;
margin:0 0 10px;
}

.terms-list h3 {
list-style:none;
font-weight:700;
margin:0 0 10px;
}

.terms-list strong {
font-weight:400;
background:#ffd;
}

.abstract {
overflow:hidden;
font-size:14px;
font-weight:400;
border-top:1px dotted #ddd;
margin:0 0 10px;
padding:20px 0;
}

.abstract img.abstract-img {
float:left;
width:100px!important;
}

.abstract span {
float:right;
width:80%;
line-height:22px;
color:#888;
}

.faq-holder {
margin-top:10px!important;
overflow:hidden;
margin-bottom:20px;
}

.tooltip {
color:#fff;
font-size:11px;
width:200px;
padding-bottom:6px;
}

.tooltip p {
background:#444;
margin:0;
padding:10px;
}

div.qtip-content.qtip-content {
font-size:11px;
padding:0!important;
}

.new-features-guest {
position:absolute;
top:45px;
width:848px;
left:0;
text-align:right;
}

.new-features-guest a {
line-height:14px!important;
}

.new-features-guest a b {
line-height:14px!important;
color:#f44;
text-decoration:none!important;
border-bottom:1px solid #f44;
margin-right:5px;
font-size:14px;
}

a.new_features_link {
font-size:14px!important;
line-height:20px;
text-decoration:none;
color:#444!important;
}

a.new_features_link,a.new-features-guest {
font-size:13px!important;
color:#444;
}

.new-features-guest a.new_features_link:hover {
color:#a44!important;
}

.new-features-guest a.new_features_link:hover span {
color:#444!important;
}

a.new_features_link:hover {
color:#444!important;
text-decoration:none;
}

.helpbox {
background:#88cf78;
overflow:hidden;
position:relative;
margin:0 0 10px!important;
padding:1px;
}

.helpbox .wrap-i {
background:#c8ffb8;
padding:14px;
}

.wrap-content {
padding-left:80px;
padding-right:30px;
background:url(<?php echo $imageurl; ?>/growing_roots.png) no-repeat;
background-position:center left;
}

.helpbox h2 {
font-size:20px;
color:#2c512d;
font-weight:400;
letter-spacing:-1px;
margin:0 0 6px;
}

.helpbox p {
color:#2c512d;
font-size:14px;
line-height:18px;
margin:0;
}

.helpbox p b {
font-weight:400;
background:#ddfb9f;
}

.helpbox .closeX a {
position:absolute;
right:8px;
top:0;
width:24px;
text-align:center;
text-decoration:none;
font-weight:700;
color:#fff;
font-size:14px;
background:#59d073;
border-right:1px solid #39b053;
border-bottom:1px solid #39b053;
border-left:1px solid #49c063;
padding:14px 0 4px;
}

.helpbox.roots {
background:#eed;
overflow:hidden;
position:relative;
margin:0;
padding:1px;
}

.helpbox.roots .wrap-i {
background:#fbfbca;
padding:14px;
}

.wrap-content.roots {
padding-left:80px;
padding-right:30px;
background:url(<?php echo $imageurl; ?>/piggy.png) no-repeat;
background-position:center left;
}

.helpbox.roots h2 {
font-size:20px;
color:#4c3700;
font-weight:400;
letter-spacing:-1px;
margin:0 0 6px;
}

.helpbox.roots p {
color:rgba(60,44,0,0.75);
font-size:14px;
line-height:15px;
letter-spacing:-1px;
margin:0;
}

.helpbox.roots p b {
font-weight:400;
background:#e5edb5;
color:#484933;
padding:0 4px;
}

.helpbox.roots .closeX a {
position:absolute;
right:8px;
top:0;
width:24px;
text-align:center;
text-decoration:none;
font-weight:700;
color:#fff;
font-size:14px;
background:#707059;
border-right:1px solid #5d5f2f!important;
border-bottom:1px solid #5d5f2f!important;
border-left:1px solid #5d5f2f!important;
padding:14px 0 4px;
}

.refresh-session {
background:#f3f780;
border-top:1px solid #ed9;
color:#333;
position:fixed;
bottom:0;
left:0;
height:30px;
text-align:center;
line-height:30px;
z-index:1000;
width:100%;
}

.refresh-session-ipad {
border-bottom:1px solid #ed9!important;
top:0!important;
}

.refresh-session-inner {
background:#f3f780;
border:1px solid #ed9;
color:#333;
overflow:hidden;
text-align:center;
line-height:30px;
z-index:1000;
margin:0 0 10px;
}

.browser-notice {
background:#fea;
border-bottom:1px solid #dc8;
overflow:hidden;
position:fixed;
width:100%;
z-index:1000;
padding:12px 0;
}

.browser-notice .msg {
font-weight:700;
width:90%;
}

.browser-notice .close span {
font-weight:700;
color:#760;
background:#dc8;
border:1px solid #cb7;
padding:0 4px 1px;
}

.browser-notice .close span:hover {
cursor:pointer;
color:#fea;
background:#a95;
border:1px solid #984;
}

h4.faq {
border-top:1px solid #ddd;
font-size:18px;
letter-spacing:-1px;
margin:0;
padding:10px 20px;
}

ul.faq {
border-top:1px solid #ddd;
list-style:none;
margin:0;
padding:20px 20px 0;
}

ul.qa {
list-style:none;
margin:0 0 10px;
padding:0;
}

ul.qa li.q {
font-size:16px;
font-weight:700;
margin-bottom:3px;
}

ul.qa li.a {
font-size:14px;
margin-bottom:20px;
}

.read-more {
background:#fff;
border:1px solid #eaeaea;
float:right;
margin:0 10px 0 0;
padding:0 10px;
}

.read-more p {
line-height:22px;
font-weight:700;
margin:0;
}

#footer {
display:table-footer-group;
width:100%;
clear:both;
background:#37779a;
}

#footer ul {
list-style:none;
overflow:hidden;
margin:0!important;
padding:0;
}

#footer ul li {
float:left;
font:1.334em Helvetica, Arial, sans-serif;
padding:0 0 0 10px;
}

#footer ul ul {
width:auto;
list-style:none;
height:1%;
float:none;
margin:0;
padding:4px 0 0;
}

#footer ul ul li {
float:none;
font:.75em Helvetica, Arial, sans-serif;
height:1%;
padding:0 0 4px;
}

.footer-content {
width:871px;
margin:0 auto;
padding:15px 50px 25px 34px;
}

.inner .footer-content {
width:800px;
padding:15px 0 25px;
}

#footer ul li.item1 {
color:#ffbbfd;
width:130px;
padding-left:0;
}

#footer ul li.item2,#footer ul li.item3 {
width:123px;
color:#baf9fd;
}

#footer ul li.item3 {
color:#fce9c0;
}

#footer ul li.copyright {
width:250px;
border-left:1px solid #666;
}

#footer ul li.copyright h2 {
font-weight:700;
font-size:13px;
color:#bba;
margin:0 0 4px;
}

#footer ul li.copyright small {
color:#aaa;
line-height:14px;
font-size:11px;
}

#footer ul a {
color:#f2f2f2;
text-decoration:none;
}

.scriptolution {
float:left;
width:76px;
height:50px;
margin-right:38px;
background:url(<?php echo $imageurl; ?>/bg-footer-logo.png) no-repeat;
}

span.unread-count {
color:#ffffe0;
}

#scriptolutiontopmenu ul li a b {
font-size:11px;
position:absolute;
}

.send-button {
position:absolute;
bottom:0;
right:0;
}

.send-button input {
margin:0;
padding:0!important;
}

h3.control-panel {
overflow:hidden;
padding:10px 0;
}

h3.control-panel a,.ideas ul li {
font-weight:400!important;
color:#666;
}

b.money {
font-family:Georgia;
}

div.no-data {
text-align:center;
margin:0 14px 0 0;
}

span.notice {
font-weight:700!important;
}

span.notice b {
font-weight:700!important;
color:#666!important;
}

.empty-data {
overflow:hidden;
margin:10px 0 0;
}

.empty-data h3 {
font-size:16px;
margin:0 0 10px;
}

.empty-data p {
margin:0 0 5px;
}

p.tip-text {
visibility:hidden;
}

.active-orders-conversation {
overflow:hidden;
clear:both;
font-size:14px;
border-top:1px dotted #ddd;
padding-top:10px;
}

.active-orders-conversation h3 {
font-size:22px;
color:#555;
margin:0 0 10px;
}

.active-orders-conversation ul {
list-style:square;
color:#abb4b8;
margin:0;
padding:0;
}

.active-orders-conversation ul li {
list-style:none;
border-top:1px dotted #ddd;
color:#888;
line-height:17px;
font-size:12px;
padding:10px 0;
}

.active-orders-conversation p {
font-weight:700;
margin:0;
}

.active-orders-conversation ul li span {
color:#6b7478;
display:block;
font-size:11px;
}

.active-orders-conversation p.abstract {
font-weight:400;
margin:10px 0;
}

.active-orders-conversation p.footer {
border-top:1px dotted #ddd;
font-size:12px;
padding:10px 0;
}

.suggest .c {
height:1%;
overflow:hidden;
background:#a0ffa8;
padding:7px 6px 3px 2px;
}

.suggest h3 {
color:#2b5e31;
font:bold 1.9166em/1em Helvetica,Arial,sans-serif;
margin:1px 0 12px;
}

.suggest-form {
height:1%;
overflow:hidden;
background:url(<?php echo $imageurl; ?>/bg-line02.gif) repeat-x 0 100%;
padding:0 4px 9px 7px;
}

.suggest-form label {
font:bold 1.167em Arial,Helvetica,sans-serif;
color:#5fb769;
display:block;
width:151px;
padding:0 0 6px;
}

.suggest-form textarea {
font:normal 14px Arial,Helvetica,sans-serif;
width:151px;
height:60px;
overflow:auto;
border:1px solid #b7c8ae;
color:#545454;
margin:0;
padding:2px 0 0 7px;
}

.suggest-form input.button {
float:right;
margin-top:8px;
}

.recent-suggestions {
height:1%;
font-size:12px;
overflow:hidden;
margin-left:-8px;
padding:5px 3px 0 10px;
}

.recent-suggestions p {
font:bold 1.167em Arial,Helvetica,sans-serif;
color:#5eb768;
margin:0 0 0 7px;
}

.recent-suggestions ul {
list-style:none;
height:1%;
overflow:hidden;
margin:0;
padding:0;
}

.recent-suggestions ul li {
background:url(<?php echo $imageurl; ?>/blt-5d.gif) no-repeat top left;
background-position:4px 1px;
font-size:1.167em;
padding:4px 0 4px 26px;
}

.recent-suggestions ul a {
color:#5c4b5a;
text-decoration:none;
}

.page .recent-suggestions strong {
clear:both;
display:block;
}

.suggestion-item {
background:#FAFAFA;
margin-top:4px;
display:inline-block;
float:left;
clear:both;
border:1px #F0F0F0 solid;
padding:4px;
}

.suggest-category {
overflow:hidden;
margin:10px 0;
}

.suggest-category p {
font-size:12px!important;
margin:0 0 5px!important;
padding:0!important;
}

.suggest-category select {
width:100%;
margin:0!important;
}

.suggest-category-select {
overflow:hidden;
display:none;
margin-top:2px;
}

.suggest-category-select .in {
overflow:hidden;
float:left;
width:10%;
line-height:22px;
}

.suggest-category-select .category select {
width:140px;
}

.gig-wrapper {
clear:both;
border-bottom:1px dotted #ddd;
padding-bottom:5px;
margin:0 0 5px;
}

.gig-image {
float:left;
margin-right:10px;
padding-top:4px;
position:relative;
}

.gig-image img {
width:102px;
border:1px solid #ddd;
z-index:100!important;
margin:0!important;
}

.gig-image.gig-index img {
width:102px;
height:72px;
}

.gig-info {
overflow:hidden;
line-height:14px;
}

.gig-title {
margin-bottom:4px;
}

.gig-desc p {
font-size:12px!important;
line-height:14px;
margin:0;
}

.gig-info-footer {
line-height:12px;
position:absolute;
bottom:0;
left:112px;
width:495px;
clear:both;
}

.gig-links {
overflow:hidden;
background:#fff;
}

.gig-links a.addbookmark,.gig-links a.removebookmark {
padding-left:20px;
}

.gig-links ul.gig-controls {
overflow:hidden;
line-height:17px;
margin:0;
padding:0!important;
}

.gig-links ul.gig-controls li {
float:left;
list-style:none;
line-height:18px;
margin:0 10px 0 0;
padding:0;
}

.gig-order-now {
float:right;
text-align:center;
}

.gig-order-now a {
background:#eee;
position:absolute;
right:0;
bottom:0;
padding:2px 4px;
}

.featured-label {
width:57px!important;
height:58px!important;
background-position:0 1px;
top:-3px!important;
background:url(<?php echo $imageurl; ?>/bg-featured-label.png) no-repeat;
position:absolute;
right:505px;
}

.featured-label-inner {
width:57px;
height:55px!important;
background:url(<?php echo $imageurl; ?>/bg-featured-label.png?123) no-repeat;
z-index:1000;
top:2px;
right:-2px!important;
}

a span.featured-label {
top:0!important;
right:-3px;
}

.gig-content-right div.featured-label-inner {
position:absolute;
right:0;
}

.gig-content-right .gig-image img {
width:378px;
}

.mutual-status p {
line-height:18px;
margin:0 0 10px;
}

.mutual-status span {
line-height:18px;
}

.status-control {
font-size:11px;
padding-top:10px;
line-height:12px;
border-top:1px solid #ddd;
color:#888;
margin:0!important;
}

span.instructions {
background:#fefefe;
border:1px solid #eaeaea;
margin:10px 0 0;
padding:10px;
}

div.complete-order-link {
float:left;
border-top:1px dotted #ddd;
width:610px;
padding-top:10px;
font-weight:700;
}

ul.tags {
z-index:0!important;
position:absolute;
top:9px;
left:7px;
list-style:none;
margin:0;
padding:2px 5px 5px;
}

.notify-buyer {
clear:both;
border:1px solid #efe6b6;
text-align:left;
background:#fff6c6 url(<?php echo $imageurl; ?>/warning.png) no-repeat left center;
font-size:12px;
font-weight:700;
padding-left:50px;
margin-bottom:10px;
}

.faq-holder ul {
font-size:14px;
overflow:hidden;
margin:0;
}

.faq-holder li {
text-align:left;
font-weight:400;
list-style:none!important;
margin:0 10px 5px!important;
}

.faq-holder ul li.q {
font-weight:700;
font-size:14px;
}

.faq-holder ul li.q a {
padding:0 2px;
}

.faq-holder ul li.q a:hover {
background:#008DC7;
color:#fff;
}

.faq-holder ul li.q.new-q a {
background:url(<?php echo $imageurl; ?>/new.png) top right no-repeat!important;
padding-right:20px;
font-size:24px;
text-decoration:none;
cursor:text;
letter-spacing:-1px;
font-weight:400;
}

.faq-holder ul li.answer {
list-style:none;
margin-left:20px;
display:none;
}

.faq-entries.last {
border-bottom:1px solid #b9dbed!important;
}

.faq-holder h4 {
font-size:16px;
color:#aaa;
margin:0 0 0 2px;
padding:10px 0;
}

.faq-holder h4.first {
border-top:none;
padding-bottom:0;
margin-bottom:5px;
border:none;
}

.faq-holder h4 span {
display:block;
font-size:12px;
font-weight:400;
color:#493;
}

.faq-entries-new {
background:#effaff;
border:1px solid #b9dbed!important;
border-bottom:none!important;
padding:10px 10px 0;
}

.faq-entries-new .answer {
margin-bottom:20px!important;
display:block!important;
}

.answer ul {
color:#30516e;
margin:0 0 10px;
padding:0 0 0 18px;
}

.answer ul li {
list-style:disc!important;
margin:0 0 5px!important;
padding:0!important;
}

.answer blockquote {
background:#fff;
border:1px solid #ddd;
margin:0;
padding:10px;
}

.wrapper .row {
margin:0 0 2px;
padding:0!important;
}

.wrapper .compose-form {
clear:both;
font-size:11px;
padding:10px;
}

.wrapper .compose-form label {
font-weight:700;
line-height:25px;
color:#5f6a6f;
}

.wrapper .compose-form input {
border:1px solid #cfdadf;
color:#5f6a6f;
font-size:14px;
margin:0;
padding:4px;
}

.wrapper .compose-form input.button {
border:none;
padding:0;
}

.wrapper .compose-form textarea {
width:510px;
margin:0;
}

.wrapper .compose-form .message-hint {
position:absolute;
margin:12px 0 0 265px;
}

p.contact-support {
font-size:14px;
margin:0 0 0 10px;
padding:0;
}

h3.intro {
font-size:17px;
letter-spacing:0;
font-family:Georgia;
font-style:italic;
font-weight:400;
line-height:22px;
margin:5px 0 10px!important;
padding:0!important;
}

h3.intro b {
font-weight:400;
color:#333;
background:#dfd;
padding:0 4px;
}

.rssEmbed {
color:#883;
float:right;
width:30%;
line-height:15px;
overflow:hidden;
}

.rssEmbed h3.sub {
text-align:center;
margin:0 0 10px;
padding:0 10px;
}

.rssEmbed ul {
border:none;
width:90%;
background:no-repeat;
list-style:none;
margin:0 10px;
padding:0;
}

.rssEmbed ul li {
border-top:1px dotted #ddc;
padding-top:10px;
margin:0 0 10px;
}

.rssEmbed span.headline {
font-size:12px;
font-weight:700;
}

.rssEmbed span.headline a {
color:#440;
}

.tabs .table-container,.files ul,.terms-list,.rssEmbed p {
margin:0;
padding:0;
}

.tabs .yellow.index tbody tr:hover,.tabs .green.index tbody tr:hover {
background:#fafafa;
}

h3.flag span.status.order-delivered,.delivered div,.cleared div {
background:#35b982;
color:#fff;
}

.yellow .sep,.green .sep {
background:#eee;
height:1px;
}

h3.upcoming b,input#message_attachment {
color:#888;
}

.info.order p,.help {
margin:10px 0;
}

.milestone.okay,.milestone.thumb-up {
background:#d6f8da url(<?php echo $imageurl; ?>/success.png) no-repeat 4px 50%;
}

.milestone.action,.milestone.thumb-down {
background:#fff6c7 url(<?php echo $imageurl; ?>/bulb.png) no-repeat 8px 50%;
}

.milestone.okay .mutual-status,.milestone.thumb-up .mutual-status {
border-left:1px solid #b6d8ba;
}

.milestone.action .mutual-status,.milestone.thumb-down .mutual-status {
border-left:1px solid #dfd6a7;
}

.box h3,.gig-inner {
overflow:hidden;
position:relative;
}

.orderpage textarea,tr.entry.unread td,.gig-content-right {
background:#fff!important;
}

.post-order-rating,.browser-notice .close,.browser-notice .msg {
float:left;
margin-left:10px;
}

ul.tabs li.deliver,ul.tabs li.talk {
margin-top:1px!important;
}

.rspnd,.message div.tip.green {
background-position:0 0!important;
}

div.tip.rspnd.rspnd-problems,#new_message div.by-me div.metadata div.tip.rspnd.rspnd-problems {
background-position:0 -81px!important;
}

.box.disabled h3,.box.disabled p {
text-shadow:#f0f0f0 1px 1px!important;
color:#d0d0d0!important;
}

.message-form-control .upload-panel h5 a,.delivery span#attached_file_name a,td.gig:hover .extended-data a {
text-decoration:none!important;
}

.delivery span#attached_file_name:hover a,#attached_file_name:hover b,li.active-orders a:hover {
color:#fff!important;
}

.new_message .tip.rspnd,#form .tip,#new_message div.by-me div.metadata div.tip.rspnd {
background-position:0 -61px!important;
}

.info.order h2 span option,.rssEmbed p.date {
font-size:11px!important;
}

a.tag:hover,a.tag.selected {
background:#1fa0d1!important;
}

.helpbox .wrap-o,.helpbox.roots .wrap-o {
background:#fff;
padding:1px;
}

.refresh-session a,.refresh-session-inner a {
cursor:pointer;
font-weight:700;
}

.refresh-session a:hover,.refresh-session-inner a:hover {
text-decoration:underline!important;
}

.browser-notice p,#join_form .lastrow {
margin:0!important;
}

* {
font-size:100.01%;
}

html {
font:62.5%/1.4 arial,helvetica,sans-serif;
height:100%;
}

body {
font:1.2em Helvetica,Arial,sans-serif;
height:100%;
color:#4b4b4b;
min-width:800px;
margin:0;
}

.inner {
min-width:860px;
background:#66b0d8;
}

.inner #header .menu-holder .holder {
height:1%;
float:right;
top:0;
}

.inner #header .menu-holder .holder .menu-r {
background:url(<?php echo $imageurl; ?>/bg-top-nav-r.png) no-repeat right;
height:36px;
width:7px;
float:right;
}

.inner #header .menu-holder .holder .menu-c {
float:right;
background:#232323;
height:36px;
}

.inner #header .menu-holder .holder .guest {
width:400px;
}

.inner #header .menu-holder .holder .menu-l {
background:url(<?php echo $imageurl; ?>/bg-top-nav-l.png) no-repeat left;
height:36px;
width:7px;
float:right;
}

a {
color:#008DC7;
outline:none;
}

a:active {
outline:none;
}

:focus {
-moz-outline-style:none;
}

input,textarea,select {
font:100% arial,sans-serif;
vertical-align:middle;
}

form,fieldset {
border-style:none;
margin:0;
padding:0;
}

.or-join,.five-dollar-marketplace,.what-will-folks-do-for-your,.featured-label,.wanna-see-more,.edit-button,.btn-done,.btn-accept,.btn-add-new,.btn-create,.btn-edit,.btn-send-work,.order-now,.scriptolution {
display:block;
overflow:hidden;
text-indent:-9999px;
outline:none;
font:0/0 Arial,Helvetica,sans-serif;
}

.btn-edit {
width:84px;
height:36px;
outline:none;
overflow:visible;
float:right;
}

.push-up {
position:absolute;
width:84px;
left:538px;
top:40px;
height:36px;
float:right;
}

.btn-create {
background:url(<?php echo $imageurl; ?>/btn-2-create-first-gig.png) no-repeat;
width:174px;
height:36px;
outline:none;
overflow:visible;
float:right;
}

.btn-add-new {
background:url(<?php echo $imageurl; ?>/btn-2-add-new.png) no-repeat;
width:84px;
height:29px;
outline:none;
overflow:visible;
}

.btn-done {
background:url(<?php echo $imageurl; ?>/btn-done.gif) no-repeat;
width:58px;
height:25px;
overflow:visible;
}

.btn-accept {
background:url(<?php echo $imageurl; ?>/btn-2-review.png) no-repeat;
width:84px;
height:28px;
overflow:visible;
}

.or-join {
background:url(<?php echo $imageurl; ?>/txt-or-join.gif) no-repeat;
height:20px;
width:88px;
float:left;
display:inline;
padding-bottom:9px;
margin:0 0 0 132px;
}

.five-dollar-marketplace {
height:92px;
width:397px;
float:right;
overflow:visible;
margin:8px 0 0 -15px;
}

.inner .five-dollar-marketplace {
width:297px;
height:70px;
}

.what-will-folks-do-for-your {
height:125px;
width:459px;
overflow:visible;
margin:0 0 8px;
}

.wanna-see-more {
background:url(<?php echo $imageurl; ?>/txt-wanna-see-more.gif) no-repeat;
width:276px;
height:26px;
margin:18px 0 0 145px;
}

.order-now-holder {
position:absolute;
margin-left:486px;
z-index:2;
}

.order-now {
width:115px;
height:36px;
clear:both;
cursor:pointer;
}

.order-now-g {
height:36px;
clear:both;
cursor:pointer;
float:right;
font-size:30px;
position:absolute;
right:0;
text-decoration:none;
}

.order-now-guest {
background:red;
}

.mdata {
position:relative;
top:60px;
margin-right:7px;
font-size:11px!important;
}

#main:after,#header:after,.login .c:after,.join .c:after,.featured:after,.featured .box:after,.featured .box .c:after,.navbar:after,.share .c:after {
display:block;
clear:both;
content:"";
}

#main-wrapper {
display:table;
width:100%;
height:100%;
}

#wrapper {
display:table-row;
min-height:100%;
width:100%;
}

* html #wrapper {
height:100%;
}

.main-area {
background:url(<?php echo $imageurl; ?>/bg-header.png) top no-repeat;
margin:0 auto;
}

.main-content {
display:table-cell;
width:100%;
}

.logo {
display:block;
overflow:hidden;
width:150px;
height:62px;
margin:0;
}

.logo a {
text-indent:-9999px;
display:block;
height:100%;
}

.logo-placer {
position:relative;
left:12px;
top:49px;
}

#main {
width:932px;
padding:0 0 20px 23px;
}

.content {
width:610px;
float:left;
background-color:#FFF;
border-right:#E0E0E0 dotted 1px;
padding-right:12px;
min-height:700px;
margin-right:16px;
}

.promo {
width:100%;
overflow:hidden;
padding:40px 0 18px 5px;
}

.promotion {
height:1%;
overflow:hidden;
margin-bottom:11px;
}

.promotion .box {
float:left;
width:268px;
}

.promotion .box .t,.promotion .box .b {
width:100%;
overflow:hidden;
height:5px;
background:url(<?php echo $imageurl; ?>/bg-promotion-box-t.png) no-repeat;
}

.promotion .box .b {
background:url(<?php echo $imageurl; ?>/bg-promotion-box-b.png) no-repeat;
}

.promotion .box .c {
height:1%;
overflow:hidden;
background:#fff;
padding:2px 5px 0 6px;
}

.promotion .box .image-box {
height:1%;
overflow:hidden;
position:relative;
}

.promotion .box .image-box a {
position:relative;
overflow:hidden;
display:block;
}

.promotion .box .image-box span {
position:absolute;
top:0;
left:0;
width:100%;
height:86px;
text-indent:-9999px;
background:url(<?php echo $imageurl; ?>/bg-opacity01.png);
}

.promotion .box .image-box a:hover {
border:0;
}

.promotion .box .holder {
height:1%;
overflow:hidden;
padding:7px 0 4px;
}

.box .holder .by-user {
position:absolute;
margin:48px 0 0 110px;
}

.five-dollars {
float:right;
color:#e1e1e1;
font:2.9166em Arial,Helvetica,sans-serif;
margin-left:1px;
}

.five-dollars a {
float:right;
color:#e1e1e1;
font:.5em Arial,Helvetica,sans-serif;
margin-left:1px;
}

.promotion .box h2 {
font:bold 18px Helvetica,Arial,sans-serif;
margin:0;
}

.promotion .box h2 a,.featured h2 a {
color:#08708e;
text-decoration:none;
font-size:16px;
background:transparent url(<?php echo $imageurl; ?>/bg-link-underline.gif) repeat-x scroll 0 95%;
letter-spacing:-.01em;
}

.featured h2 {
font:bold 1.81em/.75em arial,helvetica,sans-serif;
margin:-2px 0 3px;
}

.featured .box {
height:1%;
margin-right:6px;
border-top:#E0E0E0 dotted 1px;
padding:6px 0;
}

.featured .box .t,.featured .box .b {
width:100%;
overflow:hidden;
height:5px;
background:url(<?php echo $imageurl; ?>/bg-featured-box-t.png) no-repeat;
}

.featured .box .c {
height:1%;
position:relative;
padding:5px 0;
}

.featured .box:hover,.featured .box.hover {
background:#FBFBFB;
}

.featured .holder {
width:610px;
float:left;
position:relative;
}

.featured .holder img {
float:left;
margin:0 8px 0 0;
}

.featured .frame {
display:table;
height:1%;
}

.featured .frame-img {
float:left;
width:110px;
min-height:72px;
}

.gecko.mac.ff3 .featured h2 {
margin:2px 0 0;
}

.featured .five-dollars {
font:2.5833em/1em Arial,Helvetica,sans-serif;
color:#f3f3f3;
margin-top:5px;
}

.control-holder {
position:absolute;
width:100%;
}

ul.control {
list-style:none;
overflow:hidden;
position:absolute;
top:58px;
font-size:14px;
width:300px;
margin:0;
padding:0;
}

ul.control li {
float:left;
padding-right:9px;
display:inline;
}

ul.control a {
float:left;
color:#0095c6;
text-decoration:none;
vertical-align:top;
font:.834em/1.6em Helvetica,Arial,sans-serif;
}

ul.control span,ul.control em {
float:left;
margin-right:2px;
font-style:normal;
cursor:pointer;
}

.quick-order {
width:150px;
position:absolute;
font-weight:700;
text-align:right;
top:59px;
right:10px;
height:16px;
margin:0;
padding:0;
}

.quick-order a {
color:#0095c6;
background:#efefef;
padding:3px;
}

.quick-order a:hover {
color:red;
text-decoration:underline;
}

.est-delivery {
height:16px;
font:.834em/1.6em Helvetica,Arial,sans-serif;
color:#6f6f6f;
background:url(<?php echo $imageurl; ?>/ico-clock.png) no-repeat;
padding-left:20px;
}

.p-share {
z-index:1;
display:inline;
}

.wanna-see-more a {
float:right;
width:95px;
height:26px;
}

.sidebar {
width:345px;
float:right;
}

.facebookers {
padding-top:.3em;
width:194px;
}

#RES_ID_fb_login.fbconnect_login_button {
background:none;
margin:0;
padding:0;
}

.facebookers img {
height:25px;
width:194px;
}

ul.top-nav {
list-style:none;
overflow:hidden;
display:inline;
margin-right:20px;
padding:0;
}

ul.top-nav li {
float:left;
font-family:Arial,Helvetica,sans-serif;
font-size:1.334em;
line-height:1.6em;
padding:4px 7px 0;
}

ul.top-nav a {
color:#e5e4e4;
text-decoration:none;
outline:none;
}

ul.top-nav a span {
color:#fdf8ac;
}

.navbar {
height:1%;
padding:0;
}

ul.sell-buy {
float:left;
list-style:none;
margin:0;
padding:8px 0 0 13px;
}

ul.sell-buy li {
width:118px;
height:50px;
position:relative;
float:left;
overflow:hidden;
padding:0 10px 0 0;
}

ul.sell-buy li span {
width:118px;
height:50px;
float:left;
}

ul.sell-buy li a {
display:block;
position:relative;
cursor:pointer;
height:94px;
outline:none;
}

ul.sell-buy li a em {
position:absolute;
top:0;
left:-9999px;
}

ul.sell-buy a.sell {
background:url(<?php echo $imageurl; ?>/ico-sell.png) no-repeat;
}

ul.sell-buy a.buy {
background:url(<?php echo $imageurl; ?>/ico-buy.png) no-repeat;
}

ul.sell-buy .active {
height:44px;
position:relative;
margin:24px 0 -25px;
}

ul.sell-buy .active a {
margin-top:-50px;
}

ul.service {
float:left;
list-style:none;
margin:0 0 0 150px;
padding:0;
}

ul.service li {
float:left;
font:1.167em Arial,Helvetica,sans-serif;
padding:0 15px 0 0;
}

ul.service a {
color:#3E3E3E;
text-decoration:none;
}

ul.service a:hover {
color:#fff;
text-decoration:none;
}

.inner .logo {
float:right;
background:url(<?php echo $imageurl; ?>/bg-logo.png) no-repeat;
width:280px;
height:85px;
}

.inner #main {
width:818px;
background:#fff;
padding:18px 0 20px 20px;
}

.looking {
height:1%;
margin-bottom:9px;
overflow:hidden;
}

.looking .t,.looking .b {
width:100%;
height:5px;
overflow:hidden;
background:url(<?php echo $imageurl; ?>/bg-looking-t.png) no-repeat;
}

.looking .b {
background:url(<?php echo $imageurl; ?>/bg-looking-b.png) no-repeat;
}

.looking .c {
height:1%;
overflow:hidden;
background:#d7f4ff;
padding:0 0 1px 59px;
}

.looking label {
font-size:18px;
font-weight:700;
color:#54aae4;
padding:20px 0 4px;
}

.looking .row {
height:39px;
overflow:hidden;
}

.looking input.text {
float:left;
width:363px;
height:24px;
color:#595959;
font:20px Helvetica,Arial,sans-serif;
border:1px solid #c6c6d4;
background:#fff url(<?php echo $imageurl; ?>/bg-input02.gif) repeat-x;
margin:0;
padding:4px 10px 7px;
}

.iwill {
margin-top:10px;
height:63px;
overflow:hidden;
padding:0;
}

.iwill p {
color:#777;
font:normal 1em Arial,Helvetica,sans-serif;
margin:0 0 0 54px;
padding:0;
}

.iwill p span {
font:normal .8em Arial,Helvetica,sans-serif;
color:#777;
}

.iwill-holder {
position:relative;
font:normal 1.6em Arial,Helvetica,sans-serif;
color:#777;
margin:5px 0 0 10px;
padding:0;
}

.iwill-holder .txt {
position:relative;
float:left;
padding-top:3px;
margin-right:6px;
}

.iwill-holder .f {
position:relative;
float:left;
margin-right:6px;
}

.iwill-holder .img {
postion:relative;
float:left;
margin:-1px 0 0 10px;
}

.iwill input.text {
width:370px;
height:22px;
color:#999;
font:18px Arial,Helvetica,sans-serif;
border:1px solid #c6c6d4;
background:#fff url(<?php echo $imageurl; ?>/bg-input02.gif) repeat-x;
margin:0;
padding:3px 13px 3px 5px;
}

.iwill-btn {
width:82px;
height:33px;
}

.gecko.mac.ff3 .looking input.text {
padding:7px 10px 4px;
}

.featured .edit .holder {
width:100%;
float:none;
}

.featured .edit .frame {
width:auto;
height:1%;
}

ul.detail {
float:left;
position:relative;
list-style:none;
overflow:hidden;
margin:0 -60px 0 0;
padding:0;
}

ul.detail li {
float:left;
white-space:nowrap;
padding:0 10px 0 0;
}

ul.detail a {
color:#008cc7;
}

ul.detail .open-orders {
color:#bf001e;
}

ul.detail .gains {
color:#009100;
}

.check {
width:35px;
height:33px;
background:url(<?php echo $imageurl; ?>/bg-check.gif) no-repeat;
position:absolute;
top:4px;
left:-1px;
padding:5px 0 0 4px;
}

.paging {
width:600px;
overflow:hidden;
position:relative;
text-align:center;
margin:0 auto;
padding:12px 0 0;
}

.paging .p1 {
left:50%;
float:left;
position:relative;
text-align:center;
}

.paging ul {
left:-50%;
float:left;
position:relative;
list-style:none;
margin:0;
padding:0;
}

.paging ul li {
float:left;
color:#3a8aa8;
font:bold 1.167em/1.64em Helvetica,Arial,sans-serif;
padding:0 3px;
}

.paging ul li a,.paging ul li span {
color:#3a8aa8;
text-decoration:none;
border:1px solid #5faed6;
background:#e2f6ff;
display:block;
padding:0 4px;
}

.paging ul li span.prev,.paging ul li.prev a,.paging ul li span.next,.paging ul li.next a {
text-indent:-9999px;
width:15px;
background:#e2f6ff url(<?php echo $imageurl; ?>/ico-arrow02.gif) no-repeat 4px 5px;
}

.paging ul li.prev a {
background:#e2f6ff url(<?php echo $imageurl; ?>/ico-arrow02.gif) no-repeat 4px 5px;
}

.paging ul li.next a {
background:#e2f6ff url(<?php echo $imageurl; ?>/ico-arrow03.gif) no-repeat 6px 5px;
}

.paging ul li.prev a:hover,.paging ul li span.prev {
background:#5faed6 url(<?php echo $imageurl; ?>/ico-arrow05.gif) no-repeat 4px 5px;
}

.paging ul li.next a:hover,.paging ul li span.next {
background:#5faed6 url(<?php echo $imageurl; ?>/ico-arrow06.gif) no-repeat 6px 5px;
}

.paging ul li span.active,.paging ul li a:hover {
color:#fff;
background:#5faed6;
}

.inner .sidebar {
width:179px;
background-color:#FFF;
}

.side-nav .t,.side-nav .b {
width:100%;
height:8px;
overflow:hidden;
background:url(<?php echo $imageurl; ?>/bg-side-nav-t.png) no-repeat;
background-color:#fff;
}

.side-nav .b {
background:url(<?php echo $imageurl; ?>/bg-side-nav-b.png) no-repeat;
}

.side-nav .c {
height:1%;
overflow:hidden;
background:#d8f5ff;
padding:0 8px;
}

.side-nav ul li,.side-nav ul li ul li {
font:16px Helvetica,Arial,sans-serif;
text-transform:capitalize;
padding:4px 0 4px 12px;
}

.side-nav ul li ul li {
padding:0 0 7px;
}

.side-nav ul li.active {
background:url(<?php echo $imageurl; ?>/bg-category-active.png) no-repeat 0 0;
font-weight:700;
}

.side-nav ul li ul li.active {
background:url(<?php echo $imageurl; ?>/bg-category-active.png) no-repeat -4px -4px;
font-weight:700;
}

.side-nav ul a,.side-nav ul li ul a {
color:#00516e;
text-decoration:none;
}

.side-nav ul a:hover,.side-nav ul li ul a:hover,.side-nav ul.active a,.side-nav ul li ul.active a {
color:#53aae4;
}

.more-less {
margin-top:-4px;
}

.follow {
width:186px;
position:relative;
background:url(<?php echo $imageurl; ?>/bg-follow.png) no-repeat;
height:180px;
margin:-12px 0 16px -7px;
}

.twitter-t {
position:absolute;
width:180px;
height:15px;
cursor:default;
}

.twitter-b {
position:absolute;
display:block;
top:15px;
cursor:pointer;
text-decoration:none;
line-height:1em;
padding:88px 50px 0 16px;
}

.follow a {
text-decoration:none;
color:#8d8d8d;
line-height:1em;
}

.follow strong {
color:#575757;
display:block;
font:bold 1.833em/.8em Helvetica,Arial,sans-serif;
padding:0 0 2px;
}

.suggest .t,.suggest .b {
width:100%;
height:5px;
overflow:hidden;
background:url(<?php echo $imageurl; ?>/bg-suggest-t.png) no-repeat;
}

.suggest .b {
background:url(<?php echo $imageurl; ?>/bg-suggest-b.png) no-repeat;
}

.section {
height:1%;
overflow:hidden;
margin-bottom:10px;
}

.section .t,.section .b {
width:100%;
height:5px;
overflow:hidden;
background:url(<?php echo $imageurl; ?>/bg-featured-box-t.png) no-repeat;
}

.section .c {
background:#fff;
height:1%;
overflow:hidden;
}

.article {
height:1%;
overflow:hidden;
padding:0 4px 0 0;
}

.article .order {
float:right;
width:160px;
text-align:right;
}

.article .order .five-dollars {
color:#00d4ff;
font:3.5833em/1.13em Arial,Helvetica,sans-serif;
display:block;
}

.article .order p {
color:#b8b8b8;
font:.834em Helvetica,Arial,sans-serif;
margin:6px 0 0;
}

.article .ar-description {
font-size:15px;
}

.article .order p span {
font-size:1.167em;
color:#747474;
}

.article-txt {
display:table;
height:1%;
margin:20px 0 0;
}

.article-txt h1 {
color:#0094bf;
letter-spacing:-1px;
font:bold 1.9166em/1em Helvetica,Arial,sans-serif;
width:480px;
margin:0 0 8px;
}

.article-txt ul.control {
position:static;
display:inline;
}

.article-txt ul.control li {
font:1.1em/1.334em Helvetica,Arial,sans-serif;
}

.article-txt ul.control span {
margin-top:1px;
}

.article-txt ul.control a {
color:#6f6f6f;
}

.article-txt p {
color:#212121;
font:1.167em Arial,Helvetica,sans-serif;
margin:0 30px 5px 0;
}

.article .image-box {
height:1%;
overflow:hidden;
position:relative;
width:100%;
margin:0 4px 9px 3px;
}

.article .image-box img {
display:block;
border:1px solid silver;
}

ul.tags li {
font:bold 1.084em/1em Helvetica,Arial,sans-serif;
float:left;
padding:0 2px 5px 0;
}

ul.tags li span {
float:left;
background:#000;
margin:0 1px;
padding:1px 0;
}

ul.tags a {
float:left;
background:#000;
text-decoration:none;
color:#fff;
position:relative;
margin:0 -1px;
padding:1px 4px;
}

.seller {
height:1%;
overflow:hidden;
padding:0 0 15px;
}

.seller .holder {
height:1%;
overflow:hidden;
padding:0 0 0 1px;
}

.seller .holder .usr-img {
position:relative;
float:left;
width:60px;
min-height:50px;
}

.seller .holder .gig-title {
position:relative;
left:3px;
margin-bottom:10px;
width:380px;
}

.order-btn-callout {
background:#fff url(<?php echo $imageurl; ?>/callout-5bucks-baloon.png) no-repeat;
width:40px;
height:45px;
left:120px;
top:0;
position:absolute;
}

.order-btn-callout-small {
background:#fff url(<?php echo $imageurl; ?>/order-callout-small.gif) no-repeat;
width:40px;
height:45px;
left:120px;
top:0;
position:absolute;
}

.seller .holder .gig-title-long {
position:relative;
margin-bottom:10px;
width:440px;
}

.seller .holder .gig-desc {
position:relative;
float:left;
width:205px;
word-wrap:break-word;
font-size:1.2em;
margin:10px 10px 0 0;
}

.seller .holder .gig-title p,.seller .holder .gig-title-long p {
margin-bottom:-4px;
line-height:1.3em;
}

.seller .holder .gig-title p b,.seller .holder .gig-title-long p b {
color:#0095C6;
}

.image-box-holder {
margin-top:10px;
width:385px;
}

.image-box-holder .image-box {
height:270px;
float:right;
}

.seller .holder img {
float:left;
margin:2px 0 0;
}

.seller h1 {
color:#08708E;
letter-spacing:-1px;
font:bold 1.7166em/1em Helvetica,Arial,sans-serif;
width:380px;
margin:0 0 2px;
}

.seller h2 {
font:1.833em/1.2em Helvetica,Arial,sans-serif;
margin:0 0 5px;
}

.seller h2 a {
color:#337fa6;
vertical-align:middle;
}

.seller h2 em {
font:.633em/1.2em Helvetica,Arial,sans-serif;
color:#337fa6;
margin-left:10px;
}

.seller .holder p {
display:table;
height:1%;
color:#6f6f6f;
font:1.167em Arial,Helvetica,sans-serif;
margin:0;
}

ul.share-control {
list-style:none;
overflow:hidden;
font-size:14px;
width:200px;
line-height:140%;
margin:12px 0;
padding:0;
}

ul.share-control a {
color:#0095c6;
text-decoration:none;
font:1em/1.6em Arial,Helvetica,sans-serif;
border:0;
}

ul.gig-meta {
list-style:none;
overflow:hidden;
position:relative;
font-size:14px;
margin:10px 0 0;
padding:0;
}

ul.gig-meta a {
padding-left:22px;
color:#0095c6;
text-decoration:none;
vertical-align:top;
font:1em/1.6em Helvetica,Arial,sans-serif;
}

ul.gig-meta a:hover {
background-position:0 -16px!important;
border:0;
text-decoration:underline;
color:#0095c6;
}

ul.gig-meta li span,ul.gig-meta li em {
float:left;
margin-right:2px;
font-style:normal;
cursor:pointer;
font:1em/1.6em Helvetica,Arial,sans-serif;
}

ul.gig-meta .positive em {
cursor:default;
float:left;
color:#6f6f6f;
vertical-align:top;
font:1em/1.6em Helvetica,Arial,sans-serif;
}

.article-info h3 {
color:#474747;
font:bold 1.433em Helvetica,Arial,sans-serif;
margin:0 0 3px;
}

.feedback {
background:#FEFEFE;
border:1px solid #EEE;
padding:10px;
}

.feedback ul,.other-gigs ul,.other-gigs ul {
list-style:none;
height:1%;
overflow:hidden;
margin:10px 0;
padding:0;
}

.feedback ul li {
height:1%;
overflow:hidden;
color:#212121;
font:1.167em Helvetica,Arial,sans-serif;
padding:0 0 2px;
}

.feedback ul img {
float:left;
margin:5px 9px 0 0;
}

.feedback ul div {
display:table;
height:1%;
padding-top:4px;
width:90%;
margin-bottom:5px;
}

.feedback ul a {
color:#0d8eae;
font-weight:700;
text-decoration:none;
}

.sub-titles h2 {
font-size:1.53em;
font-weight:700;
}

.other-gigs {
width:45%;
float:left;
padding:10px;
}

.related-gigs ul p,.other-gigs p {
padding-top:0;
}

.other-gigs ul p a,.related-gigs ul p a {
color:#08708E;
text-decoration:none;
letter-spacing:-.01em;
}

.other-gigs ul p a:hover,.related-gigs ul p a:hover {
text-decoration:underline;
color:#0095c0;
}

.related-gigs {
padding-right:10px;
width:45%;
clear:none;
padding-top:10px;
margin-left:20px;
float:left;
}

.other-gigs ul,.related-gigs ul {
margin:0;
padding:2px 0 0;
}

.other-gigs ul li,.related-gigs ul li {
height:1%;
color:#212121;
font:1.167em Helvetica,Arial,sans-serif;
overflow:hidden;
margin-top:5px;
}

.other-gigs ul img,.related-gigs ul img {
float:left;
border:solid 5px #EDEDED;
margin:2px 10px 0 0;
}

.other-gigs .category-label a,.related-gigs .category-label a {
color:#666;
font-size:.8em;
display:block;
}

.other-gigs ul div,.related-gigs ul div {
display:table;
height:1%;
padding-top:2px;
}

.other-gig-box {
padding:5px 0;
}

.search {
width:164px;
position:relative;
height:38px;
margin:0;
padding:5px 0 0;
}

.search input.text {
float:left;
font:bold 14px Helvetica,Arial,sans-serif;
color:#747474;
width:110px;
height:16px;
border:1px solid #b7bbca;
background:#fff url(/images/bg-small-search-box-idle.gif) repeat-x;
margin:0;
padding:7px 7px 4px;
}

.gecko.mac.ff3 .search input.text {
padding:7px 7px 4px;
}

.sidebar .share {
width:190px;
position:relative;
overflow:hidden;
margin:0 0 0 -11px;
}

.sidebar .share .t,.sidebar .share .b {
width:100%;
overflow:hidden;
height:37px;
background:url(<?php echo $imageurl; ?>/bg-share-t.png) no-repeat;
}

.sidebar .share .b {
background:url(<?php echo $imageurl; ?>/bg-share-b.png) no-repeat;
height:8px;
}

.sidebar .share .c {
width:163px;
background:#fff;
margin:0 0 0 11px;
padding:0 2px 8px 14px;
}

.sidebar .share .holder {
width:100%;
float:left;
position:relative;
margin:-28px 0 0;
}

.sidebar .share h3 {
color:#474747;
font:1.833em Helvetica,Arial,sans-serif;
margin:0 0 2px;
}

.sidebar .share ul {
list-style:none;
height:1%;
overflow:hidden;
font:bold 1.167em Helvetica,Arial,sans-serif;
margin:0;
padding:0 0 10px;
}

.sidebar .share ul a {
color:#0d8ead;
text-decoration:none;
}

.sidebar .share ul img {
vertical-align:middle;
margin-top:-2px;
}

.account-settings {
height:1%;
overflow:hidden;
padding:8px 16px 10px 15px;
}

.account-settings h1 {
color:#474747;
font:1.833em Helvetica,Arial,sans-serif;
margin:0 0 12px;
}

.account-settings h1 strong {
display:block;
color:#0095c0;
}

.account-settings .message p {
color:#474747;
font:bold 1.167em Helvetica,Arial,sans-serif;
margin:0 11px 8px 0;
}

.account-settings .message p a {
color:#0d8eae;
font-weight:400;
}

.account-settings .message .holder {
height:1%;
border:1px solid #cfcfcf;
background:#f5f5f5;
overflow:hidden;
padding:5px 0 7px;
}

.account-settings .message .holder p {
font-weight:400;
margin:0 0 14px 10px;
}

.account-settings .message .holder p.attachment {
color:#0d8eae;
font-weight:700;
margin-bottom:0;
}

.approve-reject {
height:1%;
overflow:hidden;
padding:23px 0 0;
}

.approve-reject p.important {
color:#e90000;
font:bold 1.167em Helvetica,Arial,sans-serif;
text-align:center;
margin:0;
}

.approve-reject .holder {
height:1%;
overflow:hidden;
padding:0 0 45px 72px;
}

.approve {
float:left;
width:132px;
}

.approve a,.reject a {
color:#00be00;
font:2.5em Helvetica,Arial,sans-serif;
}

.reject a {
color:#e90000;
}

.or {
float:left;
width:116px;
text-align:center;
font-size:1.167em;
margin:25px 11px 0 0;
}

.reject {
float:left;
width:148px;
}

.thank {
height:1%;
overflow:hidden;
border:1px solid #cde4c9;
background:#edffee;
padding:15px 7px 8px 0;
}

.hmm-txt {
float:left;
width:216px;
color:#474747;
padding:35px 20px 0;
}

.thank-txt {
float:left;
width:330px;
margin:0 0 0 10px;
}

.thank .seller-message-body {
background:#fff;
min-height:400px;
border:1px solid #CDE4C9;
padding:10px;
}

.msgattachementlink-top {
background:#efefef;
margin-bottom:9px;
padding:5px;
}

.thank-txt h2 {
color:#009300;
font:bold 2em Helvetica,Arial,sans-serif;
margin:0 0 15px;
}

.thank-txt p {
font:1.167em Helvetica,Arial,sans-serif;
margin-top:0;
}

.thank-form {
float:right;
width:240px;
}

.thank-form p {
color:#009300;
font:bold 1.167em Helvetica,Arial,sans-serif;
margin:0 0 16px;
}

.thank-form .row {
height:1%;
overflow:hidden;
padding:0 0 18px;
}

.thank-form label {
float:left;
padding-right:30px;
font:1.167em/1em Helvetica,Arial,sans-serif;
}

.thank-form input.radio {
width:14px;
height:15px;
vertical-align:middle;
margin:-1px 4px 1px 0;
padding:0;
}

.gecko.mac.ff3 .thank-form input.radio {
margin:0 4px 1px 0;
}

.thank-form label.style1 {
color:#009300;
float:none;
padding-bottom:3px;
font:bold 1.167em Helvetica,Arial,sans-serif;
display:block;
}

.thank-form textarea {
border:1px solid #acdca4;
color:#292929;
font:14px Helvetica,Arial,sans-serif;
width:230px;
height:104px;
overflow:auto;
display:block;
padding:5px 0 0 8px;
}

.thank-form input.button,.hmm-form input.button {
float:right;
margin:5px 0 0;
}

.hmm {
height:1%;
overflow:hidden;
border:1px solid #cde4c9;
background:#fff0f0;
margin:9px 13px 7px;
padding:15px 7px 8px 0;
}

.hmm-txt h2 {
font:bold 2em Helvetica,Arial,sans-serif;
margin:0;
}

.hmm-txt p {
font:1.167em Helvetica,Arial,sans-serif;
margin:0 0 18px;
}

.hmm-form {
float:right;
width:242px;
}

.hmm-form label {
display:block;
color:#474747;
font:bold 1.167em Helvetica,Arial,sans-serif;
padding:0 0 2px 3px;
}

.hmm-form textarea {
border:1px solid #ddc1c1;
width:232px;
height:170px;
overflow:auto;
font:14px Helvetica,Arial,sans-serif;
padding:6px 0 0 8px;
}

.inbox-compose {
height:1%;
overflow:hidden;
padding:10px 12px 7px 11px;
}

.inbox-compose .title {
height:1%;
overflow:hidden;
padding:0 4px 20px 5px;
}

.inbox-compose .title ul {
float:right;
list-style:none;
font:bold 1.167em Helvetica,Arial,sans-serif;
text-align:right;
margin:0;
padding:0;
}

.inbox-compose .title h2,.inbox-message .title h2 {
color:#464646;
font:22px Helvetica,Arial,sans-serif;
margin:0;
}

.inbox-compose .title p,.inbox-message .title p {
color:#a1a1a1;
margin:0;
}

dl.subject-list {
list-style:none;
height:1%;
overflow:hidden;
line-height:17px;
font:normal 16px Arial,Helvetica,sans-serif;
margin:0;
padding:0;
}

dl.subject-list dd {
overflow:hidden;
height:1%;
margin:0;
padding:0 0 7px;
}

* html dl.subject-list dt {
margin-right:-3px;
}

.compose-form {
height:1%;
overflow:hidden;
border:1px solid #b9dbed;
background:#effaff;
padding:0 6px 0 10px;
}

.compose-form .row {
height:1%;
overflow:hidden;
padding:5px 0 9px;
}

.compose-form label {
float:left;
width:69px;
font:1.167em/1.7em Helvetica,Arial,sans-serif;
}

.compose-form input.text {
float:left;
width:220px;
font:14px Helvetica,Arial,sans-serif;
border:1px solid #cddee6;
padding:4px 5px;
}

.compose-form textarea {
border:1px solid #cddee6;
width:430px;
overflow:auto;
float:left;
height:141px;
font:14px Helvetica,Arial,sans-serif;
padding:4px 0 0 5px;
}

.compose-form .attachment,.notify-form .attachment {
height:1%;
overflow:hidden;
padding-top:20px;
clear:both;
}

.compose-form .attachment p,.notify-form .attachment p {
font:1.167em Helvetica,Arial,sans-serif;
margin:0 0 3px;
}

.compose-form .attachment p em,.notify-form .attachment p em {
color:#616161;
font:.858em Helvetica,Arial,sans-serif;
}

.compose-form .browse input.button,.notify-form .browse input.button {
float:left;
margin-right:8px;
}

.browse a {
float:left;
margin-right:8px;
color:#0095c0;
font:1.167em/1.71em Helvetica,Arial,sans-serif;
}

.inbox-message {
height:1%;
overflow:hidden;
font-size:1.18em;
padding:10px 12px 12px;
}

.inbox-message .title {
height:1%;
overflow:hidden;
padding:0 0 10px;
}

ul.show-list {
float:right;
color:#4c4c4c;
list-style:none;
margin:0;
padding:32px 0 0;
}

ul.show-list li {
float:left;
padding-right:2px;
font:.917em Arial,Helvetica,sans-serif;
}

.control-message {
height:1%;
overflow:hidden;
padding:0 0 6px;
}

.control-message ul.show-list {
float:left;
padding:5px 0 0;
}

ul.control-list {
float:right;
list-style:none;
margin:0;
padding:0;
}

ul.control-list li {
float:left;
padding-left:2px;
}

.message-title {
height:1%;
background:#dbf3ff url(<?php echo $imageurl; ?>/bg-message-title-t.gif) no-repeat;
overflow:hidden;
margin-bottom:10px;
}

.message-title .holder {
height:1%;
overflow:hidden;
background:url(<?php echo $imageurl; ?>/bg-message-title-b.gif) no-repeat 0 100%;
padding:4px 0;
}

.message-list ul {
list-style:none;
height:1%;
overflow:hidden;
margin:0;
padding:0 0 16px;
}

.message-list ul li {
float:left;
padding:0 10px 0 0;
}

.message-list ul input.checkbox {
width:14px;
height:14px;
vertical-align:middle;
margin:0 4px 0 0;
padding:0;
}

.message-list ul li.item1 {
width:378px;
padding-left:2px;
}

.message-list ul li.item2 {
width:70px;
}

.message-list ul li.item3 {
width:110px;
padding:0;
}

.message-list ul .item1 a {
color:#929090;
}

.message-list ul.active .item1 a {
color:#008dc7;
background:#fffdde;
font-weight:700;
}

.message-title ul li {
font-weight:700;
color:#474747;
}

.message-title ul li.item1 {
width:371px;
padding-left:7px;
font:bold;
}

.inbox-message .paging {
width:523px;
}

.message-show {
height:1%;
overflow:hidden;
min-height:400px;
border:1px #DDD dotted;
font-size:1.18em;
padding:10px 12px 7px 11px;
}

.message-show .msgtitle {
overflow:hidden;
margin-bottom:10px;
font:bold 18px Arial,Helvetica,sans-serif;
background:#d8f5ff;
padding:5px;
}

.message-details-body {
margin-left:5px;
padding:20px;
}

.message-show .msgattachementlink {
border:1px #DDD dotted;
background:#FEFEFE;
padding:5px;
}

.message-show .title {
overflow:hidden;
font-size:16px;
padding:0 4px 0 5px;
}

.message-show .title ul {
float:right;
list-style:none;
font:bold 12px Helvetica,Arial,sans-serif;
text-align:right;
margin:0;
padding:0;
}

.message-show .title h2 {
color:#2791B9;
font:1.833em/1.1em Helvetica,Arial,sans-serif;
margin:0;
}

.message-show dl.message-details dt {
float:left;
clear:left;
font:normal 12px Arial,Helvetica,sans-serif;
width:80px;
margin:0;
padding:0;
}

.message-show .message-details-wrapper {
background:#EEE;
height:70px;
padding:0 0 0 15px;
}

.message-show dl.message-details dd {
overflow:hidden;
height:1%;
font:normal 12px Arial,Helvetica,sans-serif;
margin:0;
padding:0 0 3px;
}

.message-show div.message-details-title {
font:bold 18px Arial,Helvetica,sans-serif;
background:#d8f5ff;
margin-bottom:10px;
width:100%;
height:100px;
}

.message-details-holder {
background:#EEE;
}

.message-details-holder .l,.message-details-holder .r {
position:relative;
float:left;
background-color:#fff;
padding:3px 0 3px 5px;
}

.message-details-holder .r {
width:482px;
}

.message-details-holder .regard {
font:bold 1.1em Arial,Helvetica,sans-serif;
background:#d8f5ff;
}

.message-details-holder-compose {
background:#EEE;
font-size:1.18em;
}

.message-details-holder-compose .l,.message-details-holder-compose .r {
position:relative;
float:left;
padding:3px 0 3px 5px;
}

.message-details-holder-compose .r {
width:478px;
}

.message-details-holder-compose .regard {
font:bold 1.1em Arial,Helvetica,sans-serif;
}

.edit-gig {
height:1%;
width:98%;
overflow:hidden;
padding:0;
}

.edit-gig .title {
height:1%;
overflow:hidden;
padding:0 0 8px;
}

.edit-gig .title p {
font-weight:700;
margin:0;
}

.edit-gig-form-errors {
min-height:0;
background:#fff;
padding:9px;
}

.edit-gig-form-t {
background:url(<?php echo $imageurl; ?>/bg-add-new-gig-t.png) no-repeat;
height:8px;
}

.edit-gig-form-b {
background:url(<?php echo $imageurl; ?>/bg-add-new-gig-b.png) no-repeat;
height:8px;
}

.edit-gig-form {
height:1%;
overflow:hidden;
background:#c8ffb8;
width:600px;
padding:7px;
}

.edit-gig-form-top {
background:#77e24d;
padding-bottom:0;
}

.edit-gig-form .column-l {
float:left;
width:145px;
vertical-align:top;
}

.edit-gig-form .column-r {
float:left;
width:435px;
vertical-align:top;
}

.edit-gig-form .row {
height:1%;
overflow:hidden;
margin-bottom:4px;
padding:0;
}

.edit-gig-form .top {
margin-top:12px;
}

.edit-gig-form label {
float:left;
clear:both;
width:80px;
font:16px Arial,Helvetica,sans-serif;
}

.edit-gig-form .editgigformtitle {
font-size:16px;
color:#25641F;
font-weight:400;
width:100%;
}

.edit-gig-form .thinlabel {
width:auto;
clear:none;
font:normal 16px Arial,Helvetica,sans-serif;
padding:0 0 7px;
}

.validationmsg {
font-size:16px;
color:#C00;
padding-top:10px;
}

.edit-gig-form #spacer {
padding-left:20px;
float:left;
clear:none;
height:17px;
}

.edit-gig-form .browsefile {
margin-top:5px px;
font:normal 16px Arial,Helvetica,sans-serif;
}

.edit-gig-form input.text {
float:left;
width:400px;
background:#fff url(<?php echo $imageurl; ?>/bg-input.gif) repeat-x;
border:1px solid #bac1d2;
font:normal 16px Arial,Helvetica,sans-serif;
padding:3px 5px 4px;
}

.edit-gig-form input.text-title {
float:left;
width:390px;
background:#fff url(<?php echo $imageurl; ?>/bg-input.gif) repeat-x;
border:1px solid #bac1d2;
font:normal 20px Arial,Helvetica,sans-serif;
padding:3px 5px 4px;
}

.edit-gig-form input.price-title {
float:left;
width:40px;
background:#fff url(<?php echo $imageurl; ?>/bg-input.gif) repeat-x;
border:1px solid #bac1d2;
font:normal 20px Arial,Helvetica,sans-serif;
padding:3px 5px 4px;
}

.edit-gig-form .errortext {
float:left;
width:488px;
margin-right:21px;
background:#fff url(<?php echo $imageurl; ?>/bg-input.gif) repeat-x;
border:1px solid red;
font:normal 16px Arial,Helvetica,sans-serif;
padding:3px 5px 4px;
}

.edit-gig-form .tip-text {
width:90%;
}

.edit-gig-form ul.image-tip {
list-style:none;
width:500px;
margin:10px 0 0;
padding:0;
}

.edit-gig-form .image-tip li {
margin-top:3px;
}

.edit-gig-form .side-captions-left,.edit-gig-form .side-captions-right {
font-size:20px;
font-weight:700;
color:#25641F;
float:left;
clear:none;
padding-top:7px;
}

.edit-gig-form .side-captions-left {
padding-right:8px;
padding-left:22px;
}

.edit-gig-form .side-captions-right {
padding-left:8px;
}

.edit-gig-form textarea {
margin-right:21px;
background:#fff url(<?php echo $imageurl; ?>/bg-input.gif) repeat-x;
border:1px solid #a0dc8c;
float:left;
font:normal 16px Arial,Helvetica,sans-serif;
color:#292929;
width:400px;
overflow:auto;
padding:5px 0 0 9px;
}

.edit-gig-form .categoryselection {
font-size:15px;
margin:0;
}

.max-chars {
text-align:right;
color:#616161;
margin-right:24px;
float:right;
clear:none;
}

.max-chars-top {
text-align:right;
color:#FFF;
margin-right:109px;
float:right;
clear:none;
}

.edit-gig-form .image-box {
float:left;
background:#f1f1f1;
width:99px;
height:70px;
margin-right:7px;
border:1px solid #b2dcab;
}

.edit-gig-form .image-info {
float:left;
width:190px;
color:#606160;
}

.edit-gig-form .row .image-info input.button {
float:none;
display:block;
margin:3px 0 0;
}

.estimate {
height:1%;
overflow:hidden;
padding:10px 0 2px;
}

.estimate label {
width:auto;
margin-right:11px;
}

.estimate input.text {
width:36px;
font-weight:400;
margin-right:10px;
padding:4px;
}

.estimate select {
float:left;
width:120px;
margin-top:4px;
font-size:14px;
}

.edit-gig-form .row input.button {
float:right;
display:inline;
margin:6px 42px 0 0;
}

.notify-gig {
height:1%;
overflow:hidden;
padding:12px 15px 7px 14px;
}

.notify-gig h2 {
font:1.833em/1.2em Helvetica,Arial,sans-serif;
margin:0 0 14px;
}

.notify-gig h2 strong {
display:block;
color:#0094bf;
}

.notify-status {
border:1px solid #c1d5b4;
background:#f5f5f5;
height:1%;
margin-bottom:5px;
overflow:hidden;
font:1.167em/2em Helvetica,Arial,sans-serif;
padding:0 5px 0 8px;
}

.notify-status a {
color:#0094bf;
}

.notify-status span.item1 {
width:178px;
padding-right:10px;
}

.notify-status span.item3 {
width:155px;
text-align:right;
}

.notify-status .mark {
color:#eb0000;
font:bold 1em Helvetica,Arial,sans-serif;
}

.notify-status .ontime {
color:#009c00;
font:bold 1em Helvetica,Arial,sans-serif;
}

.notify-form {
background:#c7ffb7;
border:1px solid #c1d5b4;
height:1%;
position:relative;
overflow:hidden;
padding:22px 8px 10px;
}

.notify-form label {
display:block;
color:#474747;
font:bold 1.167em Helvetica,Arial,sans-serif;
padding:0 0 3px;
}

.notify-form textarea {
border:1px solid #a0dc8c;
font:14px Helvetica,Arial,sans-serif;
width:486px;
display:block;
height:180px;
overflow:auto;
padding:5px 0 0 9px;
}

.notify-form .max-chars {
margin-right:5px;
}

.notify-form .row {
height:1%;
overflow:hidden;
padding:0 3px 0 0;
}

.sidebar .share-page .t,.sidebar .ideas-box .t {
background:url(<?php echo $imageurl; ?>/bg-share-t02.png) no-repeat;
}

.sidebar .share-page h3,.sidebar .ideas-box h3 {
color:#b3b3b3;
}

.tip {
position:absolute;
top:5px;
left:210px;
width:285px;
font:1.167em Helvetica,Arial,sans-serif;
}

.tip em {
float:left;
width:25px;
color:#c20000;
font-style:normal;
}

.tip span {
float:left;
width:260px;
}

.orders .heading h1 {
font-size:1.83em;
color:#474747;
font-weight:400;
margin:8px 0 0;
}

.orders .status-info {
float:right;
width:130px;
background:#f7f7f7;
padding:4px 7px;
}

.sort {
color:#4c4c4c;
}

.sort ul {
list-style:none;
display:inline;
color:#008bbf;
margin:0;
padding:0;
}

.sort ul li {
display:inline;
}

.orders .status-info dl {
font-size:1.167em;
color:#414141;
line-height:1.25em;
margin:0;
}

.orders .status-info dl a {
color:#008dc7;
text-decoration:none;
font-size:.85em;
position:relative;
top:-4px;
}

.orders .status-info dl dt {
float:left;
clear:left;
width:114px;
}

.orders .status-info dl dd {
text-align:right;
font-weight:700;
}

.order-table td {
font:1.167em/1.79em Helvetica,Arial,sans-serif;
vertical-align:middle;
padding:4px;
}

.order-table thead td {
background:#c7ffb7;
font-weight:700;
color:#474747;
vertical-align:top;
padding:0;
}

.order-table thead td.date {
background:#c7ffb7 url(<?php echo $imageurl; ?>/thead-lb.gif) no-repeat 0 100%;
}

.order-table thead td.date div {
background:url(<?php echo $imageurl; ?>/thead-lt.gif) no-repeat;
}

.order-table thead td.action {
background:#c7ffb7 url(<?php echo $imageurl; ?>/thead-rb.gif) no-repeat 100% 100%;
}

.order-table thead td.action div {
background:url(<?php echo $imageurl; ?>/thead-rt.gif) no-repeat 100% 0;
text-align:center;
}

.order-table .status-waiting {
color:#ffa200;
}

.order-table .status-late {
color:#f00000;
font-weight:700;
}

.order-table .status-late img {
float:left;
margin:0 4px 1px 0;
}

.gecko.mac.ff3 .order-table .status-late img {
margin-top:-1px;
}

.manage .heading {
width:100%;
overflow:hidden;
color:#a1a1a1;
}

.manage .holder {
width:100%;
overflow:hidden;
text-align:right;
}

.manage .action {
list-style:none;
float:left;
text-align:left;
margin:0;
padding:0;
}

.manage .action li {
float:left;
display:inline;
margin:0 4px 0 0;
}

.manage .action a.btn-delete {
color:#ed0000;
padding:4px 11px;
}

.manage .sort {
padding:4px 0 0;
}

.gains {
width:98%;
overflow:hidden;
margin:0 auto;
padding:2px 0 9px;
}

.gains .heading .baloon {
float:right;
background:#c9ebf8 url(<?php echo $imageurl; ?>/bg-baloon-top.gif) no-repeat;
width:182px;
text-align:center;
color:#fff;
font-size:1.12em;
font-weight:700;
}

.gains .heading .baloon .baloon-b {
background:url(<?php echo $imageurl; ?>/bg-baloon-btm.gif) no-repeat 0 100%;
width:178px;
overflow:hidden;
float:left;
padding:2px 2px 16px;
}

.gains .heading .baloon span {
color:#4cb2dd;
}

.gains .heading h2 {
font-size:1.83em;
color:#474747;
font-weight:400;
margin:13px 0 0;
}

.single {
margin:0 0 22px;
}

.gains-table td {
font-size:1.167em;
vertical-align:middle;
padding:4px;
}

.gains-table td a.line-through {
text-decoration:line-through;
}

.gains-table thead td {
background:#f1f1f1;
font-weight:700;
color:#474747;
vertical-align:top;
padding:0;
}

.gains-table thead td a {
font-size:.8em;
text-decoration:none;
position:relative;
top:-4px;
}

.gains-table thead td.date {
background:#f1f1f1 url(<?php echo $imageurl; ?>/thead-grey-lb.gif) no-repeat 0 100%;
}

.gains-table thead td.date div {
background:url(<?php echo $imageurl; ?>/thead-grey-lt.gif) no-repeat;
}

.gains-table thead td.gross {
background:#f1f1f1 url(<?php echo $imageurl; ?>/thead-grey-rb.gif) no-repeat 100% 100%;
}

.gains-table thead td.gross div {
background:url(<?php echo $imageurl; ?>/thead-grey-rt.gif) no-repeat 100% 0;
text-align:right;
}

.gains-table .status-onhold {
color:#ffa200;
background:url(<?php echo $imageurl; ?>/ico-late.gif) no-repeat;
padding:0 0 0 24px;
}

.gains-table .status-reversed {
background:url(<?php echo $imageurl; ?>/ico-late.gif) no-repeat;
padding:0 0 0 24px;
}

.balance-info {
background:#daffc1 url(<?php echo $imageurl; ?>/bg-balance-info.gif) no-repeat;
}

.balance-info .btm {
background:url(<?php echo $imageurl; ?>/bg-balance-info-b.gif) no-repeat 0 100%;
height:1%;
overflow:hidden;
padding:6px 4px 6px 6px;
}

.balance-info .text {
float:left;
width:280px;
font-weight:700;
color:#474747;
}

.balance-info .text p {
font-size:.9em;
margin:0;
}

.balance-info .withdraw {
background:#ddd;
border:1px solid #acc59b;
width:130px;
text-align:center;
font-weight:400;
color:#a4a4a4;
margin:0 0 3px;
padding:4px 0;
}

.balance-info .withdraw.active {
background:none;
border:1px solid #009c00;
width:130px;
text-align:center;
font-weight:400;
color:#009c00;
margin:0 0 3px;
padding:4px 0;
}

.balance-info dl {
float:right;
color:#474747;
width:214px;
overflow:hidden;
font-weight:700;
margin:0;
}

.balance-info dl dt {
float:left;
clear:left;
width:160px;
}

.balance-info dl dd {
text-align:right;
margin:0;
}

.balance-info dl .total {
color:#009c00;
font-size:1.5em;
}

.like-title {
width:98%;
background:url(<?php echo $imageurl; ?>/ico-like2.gif) no-repeat right;
overflow:hidden;
margin:0 auto;
padding:15px 0 4px;
}

.settings {
width:98%;
overflow:hidden;
margin:0 auto;
padding:7px 0 5px 6px;
}

.settings .heading {
width:100%;
overflow:hidden;
color:#474747;
}

.settings .heading .associated {
float:right;
width:222px;
color:#2791b9;
font-size:.8em;
line-height:1.25em;
}

.settings .heading .associated2 {
float:right;
width:195px;
color:#2791b9;
font-size:.72em;
line-height:1.2em;
}

.settings .heading .associated .btn-fb {
float:left;
background:url(<?php echo $imageurl; ?>/btn-fb.gif) no-repeat;
width:68px;
height:25px;
outline:none;
text-indent:-9999px;
margin:0 7px 0 0;
}

.settings .heading .associated2 .btn-fb {
display:block;
background:url(<?php echo $imageurl; ?>/btn-fb2.gif) no-repeat;
width:194px;
height:25px;
outline:none;
text-indent:-9999px;
margin:0 0 2px;
}

.settings .heading h2 {
font-size:1.83em;
color:#474747;
font-weight:400;
margin:16px 0 0;
}

.settings .heading h2 strong {
font-weight:700;
color:#2791b9;
}

.settings .heading p {
font-size:1.167em;
margin:0 0 10px;
}

.reset-form,.settings-form {
background:#effaff;
border:1px solid #b9dbed;
padding:5px 9px 0 5px;
}

.reset-form {
margin:31px 0 0;
}

.reset-form h3 {
color:#0095c0;
font:bold 1.167em Helvetica,Arial,sans-serif;
margin:0 0 3px;
}

.settings-form .row {
width:100%;
overflow:hidden;
padding:4px 0 9px;
}

.reset-form .row {
width:100%;
overflow:hidden;
padding:0 0 12px;
}

.reset-form label,.settings-form label {
float:left;
width:72px;
color:#474747;
font-size:1.167em;
line-height:1.5em;
padding:3px 0 0;
}

.reset-form label {
width:129px;
}

.reset-form .text,.settings-form .text {
float:left;
border:1px solid #cddee6;
width:220px;
font-size:14px;
padding:4px 5px;
}

.reset-form .text {
width:164px;
}

.settings-form textarea {
float:left;
border:1px solid #cddee6;
width:417px;
font-size:14px;
height:137px;
overflow:auto;
padding:4px 5px;
}

.settings-form .photo {
float:left;
width:320px;
}

.settings-form .photo .image {
float:left;
display:inline;
margin:0 6px 0 0;
}

.settings-form img {
display:block;
border:1px solid #cddee6;
}

.settings-form .photo .info {
float:right;
clear:none;
width:200px;
}

.settings-form .btn-browse {
display:block;
margin:0 0 4px;
}

.settings-form .photo dl {
width:100%;
overflow:hidden;
color:#606160;
margin:0;
}

.settings-form .btn-update {
float:right;
clear:both;
}

.reset-form .btn-change {
float:right;
margin:1px 0 0;
}

.funds {
width:518px;
overflow:hidden;
margin:0 auto;
padding:7px 0 5px;
}

.funds .heading {
width:100%;
overflow:hidden;
color:#474747;
margin:0 0 8px;
}

.funds .heading h2 {
font-size:1.83em;
color:#474747;
font-weight:400;
margin:5px 0 0;
}

.funds-form {
border:1px solid #c1d5b4;
background:#c8ffb8;
margin:0 0 8px;
padding:9px 15px 3px 8px;
}

.funds-form dl {
width:100%;
overflow:hidden;
font-size:1.17em;
line-height:1.5em;
margin:0 0 14px;
}

.funds-form dl .total {
font-weight:700;
color:#008200;
font-size:1.285em;
padding:18px 0 0;
}

.funds-form dt {
float:left;
clear:left;
padding:0 4px 0 0;
}

.funds-form .form-submit,.funds-form .row {
width:100%;
overflow:hidden;
padding:9px 0 8px;
}

.funds-form .form-submit {
padding:1px 0 8px;
}

.funds-form label {
float:left;
font-size:1.17em;
width:104px;
color:#292929;
}

.funds-form .text {
float:left;
border:1px solid #a0dc8c;
font-size:14px;
width:374px;
padding:6px 5px;
}

.funds .note {
color:#970000;
font-size:1.167em;
width:400px;
}

.funds .note h3 {
text-transform:uppercase;
margin:0;
}

.first-gig {
width:519px;
margin:0 auto;
padding:6px 0 8px;
}

.first-gig .heading {
background:#fffde2;
text-align:center;
margin:0 0 16px;
padding:9px 20px 8px;
}

.first-gig .heading h2 {
color:#585858;
font:bold italic 2.5em/1em Georgia,'Times New Roman',Times,serif;
margin:0;
}

.first-gig .heading h2 span {
color:#00bc00;
font-size:.734em;
}

.first-gig .steps {
list-style:none;
width:100%;
overflow:hidden;
font-size:1.167em;
line-height:1.06em;
color:#2791b9;
margin:0 0 30px;
padding:0;
}

.first-gig .steps li {
float:left;
padding-top:83px;
}

.first-gig .steps .step-1 {
width:139px;
background:url(<?php echo $imageurl; ?>/step-1.gif) no-repeat;
padding-left:14px;
}

.first-gig .steps .step-2 {
width:120px;
background:url(<?php echo $imageurl; ?>/step-2.gif) no-repeat;
padding-left:18px;
}

.first-gig .steps .step-3 {
width:118px;
background:url(<?php echo $imageurl; ?>/step-3.gif) no-repeat;
padding-left:12px;
}

.first-gig .steps .step-4 {
width:78px;
background:url(<?php echo $imageurl; ?>/step-4.gif) no-repeat;
padding-left:20px;
}

.first-gig .create {
width:100%;
overflow:hidden;
}

.section-devider-bar {
width:100%;
background:#94bcd8 url(<?php echo $imageurl; ?>/blue-bar-t.gif) no-repeat;
color:#fff;
text-align:right;
margin:15px 0 10px;
}

.section-devider-bar .b {
background:url(<?php echo $imageurl; ?>/blue-bar-b.gif) no-repeat 0 100%;
height:1%;
overflow:hidden;
padding:10px 15px 10px 12px;
}

.green-bar {
background:#00db00 url(<?php echo $imageurl; ?>/green-bar-t.gif) no-repeat;
}

.green-bar .b {
background:url(<?php echo $imageurl; ?>/green-bar-b.gif) no-repeat 0 100%;
}

.results-bar {
width:595px;
background:#EEE;
color:#999;
text-align:right;
margin:0 0 18px;
padding:6px;
}

.try {
font-size:1.33em;
background:#effc00;
color:#474747;
padding:1px 5px 3px;
}

.alert {
width:282px;
position:absolute;
top:0;
left:267px;
}

.alert .t {
height:1%;
overflow:hidden;
background:url(<?php echo $imageurl; ?>/bg-alert-t.png) repeat-y;
}

.alert .b {
width:100%;
height:11px;
overflow:hidden;
background:url(<?php echo $imageurl; ?>/bg-alert-b.png) no-repeat;
}

.alert .frame {
height:1%;
color:#2f2f2f;
background:url(<?php echo $imageurl; ?>/bg-alert-shadow.gif) repeat-x;
overflow:hidden;
font:bold 1em Arial,Helvetica,sans-serif;
margin:0 6px;
padding:6px 18px 4px 8px;
}

.alert em {
font:bold 1em Arial,Helvetica,sans-serif;
color:#df0000;
}

.add-nav .t,.add-nav .b {
width:100%;
overflow:hidden;
height:8px;
background:url(<?php echo $imageurl; ?>/bg-add-nav-t.png) no-repeat;
}

.add-nav .b {
background:url(<?php echo $imageurl; ?>/bg-add-nav-b.png) no-repeat;
}

.add-nav .c {
background:#c7ffb7;
height:1%;
overflow:hidden;
padding:0 8px;
}

.add-nav ul li {
font:1.334em Helvetica,Arial,sans-serif;
padding:0 0 7px 12px;
}

.add-nav ul a {
color:#25641f;
text-decoration:none;
}

.add-nav ul a span {
font-size:.625em;
}

.add-nav ul .active {
font-weight:700;
background:url(<?php echo $imageurl; ?>/ico-arrow04.gif) no-repeat 0 .4em;
}

.add-nav-title .t {
width:100%;
overflow:hidden;
height:8px;
background:url(<?php echo $imageurl; ?>/bg-add-nav-title-t.png) no-repeat;
}

.add-nav-title .b {
width:100%;
overflow:hidden;
height:16px;
background:url(<?php echo $imageurl; ?>/bg-add-nav-title-b.png) no-repeat;
}

.add-nav-title .c {
background:#fc0;
height:1%;
overflow:hidden;
color:#fff;
font-size:16px;
font-weight:700;
text-align:center;
padding:3px 8px 0;
}

.feedback-positive {
width:82px;
height:22px;
background:url(<?php echo $imageurl; ?>/bg-feedback-positive.gif) no-repeat;
color:#fff;
overflow:hidden;
position:relative;
font:.834em/1em Arial,Helvetica,sans-serif;
margin:-24px 0 8px;
padding:12px 60px 0 37px;
}

.invite {
display:block;
color:#8c8c8c;
line-height:1em;
text-decoration:none;
background:url(<?php echo $imageurl; ?>/bg-invite.gif) no-repeat 100% 90%;
margin:0 0 8px;
padding:10px 0 0 14px;
}

.invite em {
font-style:normal;
color:#535353;
}

.invite strong {
font:bold 1.833em/.8em Helvetica,Arial,sans-serif;
color:#f400f5;
display:block;
}

.ideas ul {
list-style:none;
}

.ideas p {
color:#3a8aa8;
margin:0 0 12px;
}

.ideas ul li {
font:bold .85em Helvetica,Arial,sans-serif;
border-bottom:dotted 1px lightgray;
margin-top:5px;
padding:0 8px 2px 0;
}

.user-notifications {
height:1%;
overflow:hidden;
min-height:400px;
padding:10px 15px 9px 14px;
}

.user-notifications .title {
height:1%;
overflow:hidden;
padding:0 0 27px;
}

.user-notifications .messagebody {
font-weight:400;
font-size:14px;
margin:0;
padding:25px 25px 0 0;
}

.alert-popup {
position:relative;
z-index:5;
padding:0;
}

.alert-login-box {
position:absolute;
top:-30px;
right:325px;
width:257px;
height:181px;
background-image:url(<?php echo $imageurl; ?>/alert-login.png);
background-repeat:no-repeat;
background-position:right;
overflow:hidden;
}

.alert-popup .t {
position:relative;
padding-right:40px;
color:#333;
overflow:hidden;
margin:40px 0 0 28px;
}

.alert-popup .t p {
font-size:14px;
color:#900;
font-weight:700;
}

.alert-join-box {
position:absolute;
top:250px;
right:325px;
width:257px;
height:181px;
background-image:url(<?php echo $imageurl; ?>/alert-login.png);
background-repeat:no-repeat;
background-position:right;
overflow:hidden;
}

.page #userprofilepage {
min-height:0;
}

.page .up-user {
position:relative;
float:left;
color:#a1a1a1;
width:480px;
margin:0;
}

.page .up-user .rating {
position:absolute;
background-image:url(<?php echo $imageurl; ?>/ico-positive.gif);
background-repeat:no-repeat;
background-position:left bottom;
right:0;
padding-left:19px;
height:14px;
padding-top:2px;
font:.65em Helvetica,Arial,sans-serif;
}

.page .up-user h1 {
color:#08708E;
letter-spacing:-1px;
font:bold 1.7166em/1em Helvetica,Arial,sans-serif;
margin:0 0 2px;
}

.page .up-rating {
position:absolute;
width:100px;
background-image:url(<?php echo $imageurl; ?>/ico-positive.gif);
background-repeat:no-repeat;
background-position:left bottom;
margin-left:420px;
padding-left:19px;
height:14px;
padding-top:2px;
}

.page .up-userimage {
position:relative;
float:left;
width:120px;
}

.page .up-userimage img {
border:1px solid silver;
}

.page .up-userdescription {
position:relative;
float:left;
clear:none;
width:410px;
padding:0;
}

.up-userdescription .control {
left:10px;
margin-top:1px;
}

.page .up-gigtitle {
color:#0095c0;
cursor:auto;
display:inline;
font-size:23px;
height:0;
text-decoration:none;
width:0;
font-weight:700;
}

.page .up-gig-bigimage {
margin-top:5px;
text-align:center;
background-color:#EEE;
width:100%;
}

.up-gig-spacer {
height:35px;
}

.page .up-gig-pricetag {
margin-top:7px;
float:left;
font:normal 55px Helvetica,Arial,sans-serif;
color:#00d4ff;
}

.page .up-gig-description {
margin-top:10px;
float:right;
width:450px;
margin-bottom:50px;
}

.plus10 {
height:10px;
}

.page .err-bodytext {
padding-top:2px;
}

.page .err-icon {
width:25px;
height:30px;
float:left;
overflow:hidden;
}

.page .heading {
width:100%;
overflow:hidden;
color:#a1a1a1;
margin:0 0 5px;
}

.page .heading h1 {
color:#08708E;
letter-spacing:-1px;
font:bold 1.7166em/1em Helvetica,Arial,sans-serif;
width:400px;
margin:0 0 2px;
}

.page .heading h1 strong {
color:#0095c0;
font-weight:blod;
}

.page h1 {
font-size:1.83em;
font-weight:400;
}

.page h1 strong {
font-weight:blod;
color:#0095c0;
}

.page h3 {
font-size:1.13em;
font-weight:700;
}

.order-details-form h2 {
position:absolute;
width:277px;
font-size:1.3em;
margin:10px 0 0;
}

.od-header {
float:left;
margin-top:40px;
}

.order-details-form .od-statusbox-notice,.order-details-form .od-statusbox-warning,.order-details-form .od-statusbox-std,.order-details-form .od-statusbox-allok {
font-size:18px;
float:right;
margin-top:0;
background-color:#FFF;
width:200px;
text-align:center;
overflow:visible;
padding:6px 0 3px;
}

.od-statusbox-notice {
color:#F60;
}

.od-statusbox-warning {
color:#C00;
}

.od-statusbox-std {
color:#333;
}

.od-statusbox-allok {
color:#0C0;
}

.to-payment {
position:relative;
margin:0 20px 20px;
}

.to-payment .progress {
background-image:url(<?php echo $imageurl; ?>/loader-long.gif);
background-repeat:no-repeat;
background-position:center;
height:60px;
margin:20px 0;
}

.abs {
position:absolute;
}

.page .notification-heading {
height:45px;
}

.notifications-box p {
font-size:16px;
margin-top:5px;
}

.nb-orange {
background:#FFC;
border:1px solid #FFEABC;
}

.nb-red {
background:#FFD6D3;
border:1px solid #FFA4A1;
}

.notif-spacer {
height:20px;
}

.recent-suggestions .user-wants,.recent-suggestions .user-wants a {
font-size:11px;
font-weight:700;
color:#5EB768;
}

.recent-suggestions .remove-suggestion a {
font-size:10px;
color:blue;
}

.recent-suggestions .suggestion-line {
background-image:url(<?php echo $imageurl; ?>/lightbulb.png);
background-position:0;
font-weight:400;
list-style-type:none;
margin:0 0 7px;
padding:3px 0 0 23px;
}

.recent-suggestions .side-suggestion-box li {
background-image:url(<?php echo $imageurl; ?>/lightbulb.png);
background-position:0;
list-style-type:none;
margin:0 0 8px;
padding:3px 0 0 23px;
}

.recent-suggestions h1 {
margin-bottom:0;
}

.recent-suggestions h2 {
font-size:16px;
font-weight:400;
margin:0 0 15px;
}

.recent-suggestions .more-suggestions-side {
width:100%;
font-size:14px;
text-align:right;
margin:0;
}

.suggestions-more-big {
float:right;
width:50px;
height:14px;
color:#FFF;
border:1px #AAA solid;
background-color:#CCC;
text-align:right;
font-size:12px;
padding:5px;
}

.typo p,.typo div {
font-size:14px;
margin:0;
}

.typo h1 {
font-size:1.83em;
font-weight:400;
margin:0;
}

.typo h1 strong {
font-weight:700;
color:#0095c0;
}

.typo h3 {
font-size:1.13em;
font-weight:700;
margin:4px 0 6px;
}

.typo ul {
list-style:none;
list-style-image:none;
overflow:hidden;
margin:0;
padding:0;
}

.typo ul li {
background:url(<?php echo $imageurl; ?>/bg-valid-name.gif) no-repeat 0 0;
font-size:1.04em;
margin-top:18px;
padding:2px 0 2px 28px;
}

.typo ul li.bad {
background:url(<?php echo $imageurl; ?>/input-x.png) no-repeat 0 0;
font-size:1.04em;
margin-top:18px;
padding:2px 0 2px 28px;
}

.wc-sl {
width:500px;
height:350px;
left:120px;
top:80px;
background-color:#FFF;
border:#000 solid 3px;
z-index:6;
padding:20px;
}

.btn-continue {
background-image:url(<?php echo $imageurl; ?>/btn-2-continue.png);
background-repeat:no-repeat;
height:36px;
width:84px;
float:right;
}

.promo .main-site-message {
font:bold 60px Georgia,"Times New Roman",Times,serif;
margin:0;
padding:0;
}

.promo h2 {
font:bold 20px Georgia,"Times New Roman",Times,serif;
margin:0;
padding:0;
}

.login-teaser {
position:relative;
top:0;
left:150px;
font:bold 16px arial,helvetica,sans-serif;
background:url(<?php echo $imageurl; ?>/bg-logout-teaser-balloon.png) no-repeat;
width:252px;
height:29px;
margin:0;
padding:4px 0 0 22px;
}

#login-details {
margin-top:100px;
float:right;
width:179px;
background-color:#FFF;
}

.fbholder {
height:25px;
width:194px;
overflow:hidden;
display:block;
}

.tag1 {
font-size:1em;
}

.tag2 {
font-size:1.2em;
}

.tag3 {
font-size:1.4em;
}

.tag4 {
font-size:1.6em;
}

input.fieldWithErrors.text,textarea.fieldWithErrors.text {
border:1px solid red;
}

div.tagMatches {
margin-top:10px;
overflow:hidden;
width:490px;
float:left;
}

div.tagMatches span {
margin-right:4px;
color:#7DBC59;
font-size:16px;
font-weight:400;
cursor:pointer;
padding:2px;
}

.flash_info,.flash_notice,.flash_error,.flash_warning {
font-weight:700;
overflow:hidden;
-webkit-border-radius:3px;
-moz-border-radius:3px;
border-radius:3px;
margin:10px 0;
padding:10px 15px 10px 40px;
}

.flash_info p,.flash_notice p,.flash_error p,.flash_warning p {
width:93%;
float:left;
text-align:center;
margin:auto;
padding:0;
}

.flash_error {
border:1px solid #e9c59b;
background:#ffecce url(<?php echo $imageurl; ?>/error.gif) 12px 50% no-repeat;
color:#e3302c;
}

.flash_notice {
border:1px solid #bfde84;
background:#edfbd8 url(<?php echo $imageurl; ?>/success.gif) 12px 50% no-repeat;
color:#508600;
}

.flash_info {
border:1px solid #bbdbe0;
background:#ecf9ff url(<?php echo $imageurl; ?>/info.gif) 12px 50% no-repeat;
color:#0888c3;
}

.flash_warning {
border:1px solid #e5e181;
background:#fefde2 url(<?php echo $imageurl; ?>/warning.gif) 10px 50% no-repeat;
color:#666;
}

.welcome {
float:right;
font:.917em/2.3em Arial,Helvetica,sans-serif;
color:#fff;
margin:5px 7px 0;
}

.welcome a:hover {
color:#00fffc;
text-decoration:underline;
}

.welcomebox {
height:162px;
width:610px;
background:#eee;
margin-bottom:5px;
}

.welcomebox h1,.welcomebox h2 {
position:relative;
top:48px;
left:10px;
width:500px;
font:1.8em arial,helvetica,sans-serif;
line-height:1.1em;
letter-spacing:-.03em;
margin:0;
padding:0;
}

.welcomebox h2 {
top:54px!important;
font:italic 1.3em arial,helvetica,sans-serif;
color:#6c6c6c;
}

.topmenu {
font-family:Arial,Helvetica,sans-serif;
font-size:15px;
float:left;
}

.topmenu ul {
list-style-type:none;
background:#232323;
margin:0;
padding:0;
}

.topmenu ul li {
position:relative;
display:inline;
float:left;
}

.topmenu ul li a {
display:block;
color:#E5E4E4;
text-decoration:none;
padding:8px 10px;
}

* html .topmenu ul li a {
display:inline-block;
cursor:pointer;
}

.topmenu ul li a:link,.topmenu ul li a:visited {
color:#E5E4E4;
}

.topmenu ul li ul {
position:absolute;
left:0;
display:block;
visibility:hidden;
z-index:1000;
}

.topmenu ul li ul li {
display:list-item;
float:none;
}

.topmenu ul li ul li ul {
top:0;
}

.topmenu ul li ul li a {
font-size:13px;
min-width:120px;
border-top-width:0;
margin:0;
padding:5px;
}

.top-menu-spacer {
min-width:20px;
display:block;
}

.topmenu ul li ul li a:hover {
background:#eff9ff;
color:#003;
}

.downarrowclass {
position:absolute;
top:12px;
right:7px;
}

.rightarrowclass {
position:absolute;
top:6px;
right:5px;
}

.entry-wrapper {
min-width:353px;
}

.entry-wrapper .t {
background-image:url(<?php echo $imageurl; ?>/bg-login-popup-t.png);
background-repeat:no-repeat;
background-position:right;
height:6px;
}

.entry-wrapper .c {
background:#eee;
margin:0;
}

.entry-wrapper .b {
background-image:url(<?php echo $imageurl; ?>/bg-login-popup-b.png);
background-repeat:no-repeat;
background-position:right;
height:6px;
}

.how-it-work-popup {
display:none;
overflow:hidden;
width:650px;
}

.how-it-works-wrapper {
min-width:600px;
}

.how-it-works-wrapper h1 {
color:#555;
letter-spacing:-1px;
margin-top:15px;
font:bold 1.9166em/1em Helvetica,Arial,sans-serif;
}

.how-it-works-wrapper ul {
list-style:square;
width:280px;
margin:0;
padding:0 0 5px 16px;
}

.how-it-works-wrapper ul li {
font:bold 1.167em Arial,Helvetica,sans-serif;
color:#000;
padding:0 0 0 -10px;
}

.how-it-works-wrapper p {
text-align:center;
line-height:18px;
font:normal 1.167em Arial,Helvetica,sans-serif;
margin-top:4px;
}

.how-it-works-wrapper .arrow-down {
background-image:url(<?php echo $imageurl; ?>/terms-arrow-down.png);
background-repeat:no-repeat;
background-position:center;
width:303px;
height:23px;
margin:1px;
}

.how-it-works-wrapper .columns {
height:440px;
}

.how-it-works-wrapper .left-column {
float:left;
width:308px;
background:#a0ffa8;
margin:3px 10px 3px 4px;
}

.how-it-works-wrapper .right-column {
float:left;
width:308px;
background:#d8f5ff;
margin:3px 10px 3px 3px;
}

.how-it-works-wrapper .t {
background-image:url(<?php echo $imageurl; ?>/bg-how-it-works-t.png);
background-repeat:no-repeat;
background-position:right;
height:6px;
}

.how-it-works-wrapper .c {
background:#fff;
margin:0;
padding:0 0 20px 5px;
}

.how-it-works-wrapper .b {
background-image:url(<?php echo $imageurl; ?>/bg-how-it-works-b.png);
background-repeat:no-repeat;
background-position:right;
height:6px;
}

.how-it-works-wrapper .c .more {
font:bold 1.167em Arial,Helvetica,sans-serif;
color:#333;
margin:0 0 0 10px;
}

.join .errorExplanation,.login .validation-error,.join .validation-error {
color:#12deeb;
font-weight:700;
width:335px;
overflow:hidden;
}

.status-checking {
position:absolute;
left:160px;
top:98px;
z-index:100;
display:block;
overflow:hidden;
}

.status-ok {
position:absolute;
left:305px;
top:96px;
z-index:100;
width:30px;
height:30px;
}

.login .validation-error {
color:#8B0000;
padding:0 0 15px 15px;
}

div #errorExplanation {
color:#12deeb;
margin:0;
}

#errorExplanation h2 {
font:bold 1.367em Arial,Helvetica,sans-serif;
color:#d44;
margin:0 0 4px;
}

#errorExplanation p {
display:none;
font-weight:700;
text-decoration:underline;
margin:0 0 4px;
}

#errorExplanation ul {
list-style:square;
width:289px;
margin:0;
padding:0 0 5px 16px;
}

#errorExplanation ul li {
color:#b22;
font-weight:400;
line-height:18px;
font-style:italic;
padding:0 0 0 -10px;
}

.join .holder {
padding-left:20px;
padding-top:10px;
margin:0;
}

.join .holder .close {
float:right;
margin-right:10px;
}

.join .row01,.join .row02,.join .row03 {
width:350px;
margin-bottom:10px;
float:left;
}

.join .row02 {
padding-bottom:6px;
}

.join label {
color:#777;
width:100%;
float:left;
font:normal 1.167em Arial,Helvetica,sans-serif;
}

.join label.style1 {
float:left;
width:125px;
margin-left:48px;
}

.join label.style2 {
float:left;
font:1em Arial,Helvetica,sans-serif;
letter-spacing:-.02em;
width:180px;
margin:15px 0 0;
}

.join label.style3 {
width:155px;
}

.join input.text {
position:relative;
background:#fff url(<?php echo $imageurl; ?>/bg-input.gif) repeat-x;
border:1px solid #c2ccba;
float:left;
font:16px Arial,Helvetica,sans-serif;
width:300px;
padding:3px 5px 4px;
}

.join input.style1 {
width:140px;
float:left;
}

.join .row01 input.style2 {
float:right;
width:65px;
margin-right:21px;
}

.join input.username {
width:300px;
}

.valid-name {
width:21px;
height:18px;
position:absolute;
z-index:10;
top:5px;
right:7px;
background:url(<?php echo $imageurl; ?>/bg-valid-name.gif) no-repeat;
text-indent:-9999px;
}

.captcha {
float:right;
padding-right:17px;
width:155px;
}

.captcha span {
float:left;
color:#3B3;
font:bold 1.1167em/2em Arial,Helvetica,sans-serif;
}

.join input.button {
float:right;
margin:10px 35px 0;
}

.register-popup,.login-popup {
display:none;
overflow:hidden;
width:353px;
}

.login {
padding-top:10px;
width:350px;
margin:0;
}

.login .row {
width:335px;
overflow:hidden;
padding:0 0 3px 15px;
}

.login label {
float:left;
width:143px;
color:#777;
font:normal 1.167em Arial,Helvetica,sans-serif;
padding:0 10px 0 0;
}

.login .longlabel {
width:250px;
}

.login .remember {
left:-6px;
color:#777;
}

.login .forget {
top:5px;
}

.login input.text {
float:left;
width:120px;
margin-right:21px;
background:#fff url(<?php echo $imageurl; ?>/bg-input.gif) repeat-x;
border:1px solid #bac1d2;
font:16px Arial,Helvetica,sans-serif;
padding:3px 5px 4px;
}

.login .row .textlong {
float:left;
width:263px;
margin-right:21px;
background:#fff url(<?php echo $imageurl; ?>/bg-input.gif) repeat-x;
border:1px solid #bac1d2;
font:16px Arial,Helvetica,sans-serif;
padding:3px 5px 4px;
}

.login .row a {
float:left;
margin-top:15px;
}

.login .close {
position:absolute;
z-index:110;
left:160px;
}

.spotlight-close {
float:right;
margin-right:5px;
text-decoration:none;
font-weight:700;
}

.login input.button {
float:right;
display:inline;
margin:10px 22px 0 0;
}

.new-order-congrads {
color:#1f8928;
font-size:26px;
text-align:center;
}

.new-order-wrapper {
font-size:14px;
position:relative;
padding:30px 0 0;
}

.new-order-wrapper .important {
font-weight:700;
color:red;
}

.new-order-wrapper .time {
background:#feffcf;
}

.new-order-wrapper .accept-box {
margin-left:110px;
margin-top:20px;
border:1px solid green;
width:350px;
background-color:#deffdd;
border-color:#65ff61;
padding:15px;
}

.new-order-wrapper .accept-button {
position:absolute;
left:370px;
}

.new-order-wrapper .accept-label {
width:200px;
clear:none;
}

.new-order-wrapper .notes-area {
top:170px;
padding:30px;
}

.orders-row,.orders-row-dimmed {
border-bottom:dotted 1px #BBB;
}

.orders-row-dimmed {
background:#F9F9F9;
color:#CCC;
}

.orders-date-col {
min-width:90px;
}

.orders-title-col {
min-width:250px;
}

.btn-send-work {
background:url(<?php echo $imageurl; ?>/btn-2s-send-work.png) no-repeat;
width:84px;
height:28px;
overflow:visible;
}

.seller-order-box {
position:relative;
border:1px dotted #CCC;
margin-bottom:10px;
font:1em Arial,Helvetica,sans-serif;
min-height:80px;
overflow:hidden;
}

.seller-order-box img {
position:absolute;
left:4px;
top:4px;
}

.seller-order-box h2 {
font:bold 1.067em Arial,Helvetica,sans-serif;
margin:0 0 6px;
padding:0;
}

.seller-order-box p {
background:url(<?php echo $imageurl; ?>/bg-iwill.png);
margin:0 0 4px;
padding:4px 0;
}

.seller-order-box b {
font:bold 1.367em Arial,Helvetica,sans-serif;
color:red;
}

.seller-order-box em {
font-style:normal;
color:red;
}

.seller-order-box .desc {
position:absolute;
left:112px;
width:244px;
top:4px;
background:#FFF;
border:1px dotted #CCC;
min-height:60px;
padding:5px;
}

.seller-order-box .act {
position:absolute;
right:4px;
top:4px;
background:#EBFEE8;
min-height:60px;
width:220px;
border:1px dotted #CCC;
text-align:center;
padding:5px;
}

.bg-green {
background:#E8FEE8;
}

.seller-order-box .order-completed p {
font:bold 1.267em Arial,Helvetica,sans-serif;
color:gray;
}

.status-in-progress,.status-in-progress-late,.status-complete {
background:#32CD32;
color:#006400;
padding:1px 3px;
}

.status-in-progress-late {
background:#8B0000;
color:#FFF;
}

.seller-order-more-options {
display:none;
background:#FFFFE0;
padding:3px;
}

.status-complete {
background:lightgray;
color:gray;
}

.seller-order-box-complete {
background:#D3D3D3;
}

.nothing-to-show-in-list {
margin-top:30px;
background:#FFFFE0;
text-align:center;
width:100%;
padding:3px;
}

.contact-seller-from-review {
font-weight:700;
clear:both;
display:none;
padding-top:10px;
}

.progress-indicator-icon,.progress-indicator-icon-notifycomp,.progress-indicator-icon-gigform,.progress-indicator-icon-message,.progress-indicator-icon-feedback,.suggest-progress-indicator-icon-message,.progress-indicator-icon-review,.progress-indicator-icon-join,.progress-indicator-icon-login {
background:url(<?php echo $imageurl; ?>/progress-icon.gif) no-repeat;
padding-left:25px;
height:20px;
display:none;
}

div.progress-indicator-icon-feedback {
float:right!important;
margin:12px 10px 4px 0;
}

.progress-indicator-icon-join,.progress-indicator-icon-login {
background:url(<?php echo $imageurl; ?>/ajax-loader-darkbg.gif) no-repeat;
float:right;
color:#28BA15;
clear:both;
font-weight:700;
margin:8px 35px 5px 5px;
}

.progress-indicator-icon-login {
padding-right:20px;
}

.progress-indicator-icon-review {
float:right;
clear:both;
margin:15px 5px 5px;
}

.order-row {
list-style:none;
clear:both;
margin:0;
padding:0;
}

.order-row .column1,.order-row .column2,.order-row .column3 {
float:left;
font-size:14px;
margin:10px 0 0;
padding:0 0 0 10px;
}

.order-row .column2 {
width:335px;
}

.order-row .column3 strong a {
font-size:16px;
}

.order-row .status-in-progress-late-delivery {
color:red;
font-size:12px;
}

.order-row .status-rejected {
background:lightred;
color:#000;
}

.order-row .status-complete-for-review {
font-size:12px;
margin-top:2px;
}

.order-row .status-awaiting-seller-accept {
color:green;
}

.order-row .devider {
border-bottom:dotted 1px lightgray;
margin:0;
padding:2px 0;
}

.order-row .more-options {
font-size:12px;
font-weight:700;
float:right;
}

.order-row .more-options-area div {
font-size:12px;
padding-top:3px;
}

.order-row .details {
margin-top:1px;
color:#999;
font-size:12px;
}

.rss-link {
margin-top:20px;
background:url(<?php echo $imageurl; ?>/rss.gif) no-repeat;
width:100px;
height:14px;
padding:2px 0 0 20px;
}

.apple_overlay {
display:none;
background-image:url(<?php echo $imageurl; ?>/transparent.gif);
}

.cl {
clear:left;
}

.is-member {
padding-left:22px;
font-size:16px;
}

.terms-list li {
margin:5px 0 10px;
}

.username-validation,.status-error {
color:#8B0000;
float:left;
clear:both;
}

.image-box-holder #photo1 {
float:left;
clear:none;
width:100px;
height:80px;
cursor:pointer;
}

.order-row .seller-related-files ul {
list-style:none;
margin:0;
padding:0;
}

.order-row .seller-related-files li {
background:#f7f7f7;
color:inherit;
margin-top:2px;
}

.contact-seller-link a {
background:#FFFFE0;
font-weight:700!important;
display:inline;
}

.contact-seller-button {
font-size:12px;
margin-right:17px;
}

.contact-seller-button img {
border:0;
padding-left:1px;
}

.how-it-works-button {
position:absolute;
top:118px;
left:350px;
}

.how-it-works-button a {
text-decoration:none;
font-size:24px;
color:#fff;
}

.cancel-order-link {
text-align:left;
font-size:.8em;
color:red;
}

.cancel-order-link a:link,.cancel-order-link a:visited,.cancel-order-link a:active,.cancel-order-link a:hover {
font-size:.9em;
color:red;
}

.buyer-order-status-line {
font-size:.8em;
}

.overtime {
font-size:.8em;
color:red;
}

.ul .li {
float:left;
margin:0 1px;
}

.ul .li a {
display:block;
padding:1px 4px;
}

.ul .li a.current {
background:#008DC7;
text-decoration:none;
color:#fff!important;
font-weight:400;
}

a.highlight {
background:url(<?php echo $imageurl; ?>/heart.png) no-repeat left center;
padding-left:22px!important;
color:red;
}

.ul .sep-right {
border-right:1px dotted #ccc;
padding-right:4px;
margin-right:4px;
}

span.helptext {
color:#888;
padding-right:2px;
}

.bordertop {
border-top:#E0E0E0 dotted 1px;
}

li.rating ul {
overflow:hidden;
padding:0;
}

ul li.star {
width:16px;
height:16px;
background:url(<?php echo $imageurl; ?>/stars.png) no-repeat;
color:#fa3;
margin:0;
padding:0;
}

ul li.disabled {
background-position:0 100%;
}

ul li.disabled:hover {
background-position:0 50%;
}

.profile-image {
float:left;
margin-right:20px;
}

.profile-details {
float:left;
width:480px;
}

.profile-details h1 {
font-weight:700;
font-size:22px;
color:#08708E;
float:left;
margin:0;
}

span.profile-meta {
color:#a1a1a1;
}

.user-ratings {
float:right;
margin-top:4px;
}

.user-ratings span.rating {
background:url(<?php echo $imageurl; ?>/ico-positive.gif) no-repeat;
background-position:0 -16px;
padding-left:18px;
color:#08708E;
font-size:13px;
}

.list-controllers ul {
list-style:none;
position:absolute;
bottom:0;
width:500px;
margin:0;
padding:0;
}

.list-controllers ul li {
display:inline;
line-height:15px;
margin:0;
}

.list-controllers ul a {
padding-left:18px;
margin-right:4px;
float:left;
}

.gig-controls {
float:left;
width:100%;
}

a.share-link {
background:url(<?php echo $imageurl; ?>/ico-share.gif) no-repeat;
padding-left:22px!important;
}

a.addbookmark {
background:url(<?php echo $imageurl; ?>/ico-like.gif) no-repeat;
background-position:0 0;
}

a.removebookmark {
background:url(<?php echo $imageurl; ?>/ico-like.gif) no-repeat;
background-position:0 -16px!important;
}

li.quick-order a {
float:right;
font-weight:700;
background:#eaedef;
margin:0 5px;
padding:2px 4px;
}

.featured-gig {
background:url(<?php echo $imageurl; ?>/bg-featured-label.png) no-repeat!important;
width:58px;
height:59px;
position:absolute;
right:0;
text-indent:-9999px;
}

.gig-header {
float:right;
overflow:hidden;
position:relative;
width:100%;
}

.gig-head {
position:relative;
width:600px;
}

.gig-content {
overflow:hidden;
padding-top:10px!important;
}

.gig-content-right {
float:right;
background:#f0f0f0;
}

.gig-description {
position:relative;
float:left;
width:205px;
word-wrap:break-word;
font-size:1.2em;
margin:0 10px 0 0;
}

.input-label {
font-size:18px;
font-weight:700;
color:#54aae4;
margin-bottom:5px!important;
padding:20px 0 4px;
}

.withdraw-note h4 {
color:#f44;
font-size:14px;
margin:0;
}

.withdraw-page form {
background:#fafafa!important;
border:1px solid #eaeaea;
width:350px;
overflow:hidden;
margin:0;
padding:20px;
}

.withdraw-page form label {
width:100%;
}

input#confirm_paypal_email.text,input#paypal_email.text {
width:340px;
}

.withdraw-page h3 {
font-size:22px;
color:#444;
margin:0 0 20px;
}

.tabs,.pin,.abs.forget {
position:relative;
}

.index thead.icons td.amount,.gains-table td.gross {
text-align:right;
}

.index .info span.right:hover a,.welcome a,.topmenu ul li a:hover {
color:#fff;
}

.index .info span.right.disabled:hover,.withdraw-page form input {
border:1px solid #dadada!important;
}

.uploadifyQueueItem span,.order-row .details a {
color:#555;
}

.info.order h2,.metadata .info h3,ul.share-control li,.feedback ul p,.other-gigs ul p,.related-gigs ul p,* html .sidebar .share ul img,*+html .sidebar .share ul img,.approve-reject .holder p,.edit-gig-form .image-info p,.gains .heading .baloon p,.settings .heading .associated2 p,.settings .heading .associated p,.settings-form .photo dl dd,.funds-form dd,.funds .note p,.first-gig .steps p,.try p,.join {
margin:0;
}

tr.entry.unread b.username,tr.entry.unread a span.gig-title,.suggestion-box {
color:#000;
}

.abstract span a,.how-it-works-button a:hover {
color:#666;
}

li.active-orders a,.topmenu ul li .start-selling,.topmenu ul li .start-selling-first {
color:#c7ffb7!important;
}

.suggest,.holder-box,.side-nav,.article-promo,.article-info,.account-settings .message,.browse,.message-list {
height:1%;
overflow:hidden;
}

.gig-title h2,ul.cat-more {
margin:0!important;
padding:0!important;
}

.faq-holder ul li.q.new-q a:hover,a:visited,.entry-wrapper .c a,.how-it-works-wrapper .c a {
color:#008DC7;
}

.faq-entries,.other-gigs p.category-label,.related-gigs p.category-label,.message-title ul,* html .how-it-works-wrapper ul,* html #errorExplanation ul {
padding:0;
}

.customer-support,a.link-more {
padding-left:0!important;
}

.page-title h2 a:hover,td.gig .extended-data a:hover span,.al-ordered h1 a,#footer ul a:hover,.active-orders-conversation ul li a:hover,.recent-suggestions ul a:hover,ul.top-nav a:hover,.recent-suggestions ul a:hover,.feedback ul a:hover,.sidebar .share ul a:hover,.orders .status-info dl a:hover,.gains-table thead td a:hover,.funds .note p span,.typo ul a:hover {
text-decoration:underline;
}

.tabSet div span,.index td.datetime span,.promotion .box .image-box img,ul.control-list img,.page .up-gig-bigimage img {
display:block;
}

.thumb-up .mutual-status p,.answer p,.manage .heading p,.gains .heading p {
margin:0 0 10px;
}

ul.filters li a,b.balance a,.toolbox .topic a.achtung,.message .author a,.al-ordered a,a:hover,.typo ul a {
text-decoration:none;
}

b.balance b,.info.order h2 em b,.account-settings .message .holder p.attachment a,.results-bar h2 span {
font-weight:400;
}

.stats h3.right,.order-finish input,.suggest-category-select .category,.featured .edit input.button,.compose-form input.button,.notify-form .row input.button,.funds-form .btn-funds,.first-gig .btn-create,span.order-now-holder {
float:right;
}

.stats .notice,.browser-notice .close,.new-order-subtitle {
text-align:center;
}

p.checkbox,.status-control a,p.contact-support a,.ideas ul li a {
font-weight:700;
}

.attachment-add,.toggle-close,.uploadifyProgress div.files-added,a.spam_message span,.rssEmbed p.feedTitle,.rssEmbed div#creditfooter,.promotion .box:hover .image-box a span,.promotion .box.hover .image-box a span,.order-row .more-options-area,#register-spotlight {
display:none;
}

.attach-files,.message-inner .files,.message .datetime,.message-content,.message-show .msgbody,.ul,.profile-header,.user-identity,.list-controllers,.withdraw-page {
overflow:hidden;
}

.upload-panel .browse,.info.order h2 img,ul.gig-meta li {
float:left;
margin-right:10px;
}

.file-upload,div.progress-indicator-icon-message,.extended-data,tr.entry.unread .extended-data,.order-flow,.looking input.button,.seller div,.search input.button,.notify-status span,.manage .action a,.gig-content-left,.withdraw-form {
float:left;
}

.inner .main-area,.inner #header {
width:860px;
}

img,img .entry-wrapper {
border:none;
}

.f-right,.orderNow {
float:right!important;
}

#header,.featured,.ideas {
height:1%;
}

.promotion .box:hover h2 a,.promotion .box.hover h2 a,.featured .box:hover h2 a,.featured .box.hover h2 a,.seller h2 strong,.article-info h3 strong,.inbox-compose .title ul a,.inbox-compose .title p a,.inbox-message .title p a,.edit-gig .title p a {
color:#0095c0;
}

.featured .box .b,.section .b {
background:url(<?php echo $imageurl; ?>/bg-featured-box-b.png) no-repeat;
}

ul.control span,ul.gig-meta span {
height:16px;
width:16px;
overflow:hidden;
text-indent:-9999px;
}

ul.control .positive span,ul.gig-meta .positive span,.seller div span {
background:url(<?php echo $imageurl; ?>/ico-positive.gif) no-repeat;
background-position:0 -16px;
}

ul.control .positive em,.seller div em {
cursor:default;
float:left;
color:#6f6f6f;
vertical-align:top;
font:.834em/1.6em Helvetica,Arial,sans-serif;
}

ul.control .like span,ul.gig-meta .like span {
background:url(<?php echo $imageurl; ?>/ico-like.gif) no-repeat;
background-position:0 -16px;
}

ul.control .share span,ul.gig-meta .share span {
width:21px;
background:url(<?php echo $imageurl; ?>/ico-share.gif) no-repeat;
background-position:0 -16px;
}

ul.control .share,ul.gig-meta .share,.notify-status span.item2 {
width:160px;
}

ul.control a:hover,ul.share-control a:hover {
border:0;
text-decoration:underline;
color:#0095c6;
}

ul.control a:hover span,ul.control .active a span,.featured .box:hover ul.control a span,.featured .box.hover ul.control a span,ul.gig-meta a:hover span,ul.gig-meta .active a span,.featured .box:hover ul.gig-meta a span,.featured .box.hover ul.gig-meta a span,.list-controllers ul a:hover {
background-position:0 -16px;
}

.check input,.join input.checkbox {
width:14px;
height:14px;
vertical-align:middle;
margin:0;
padding:0;
}

.side-nav ul,.side-nav ul li ul,.add-nav ul {
list-style:none;
height:1%;
overflow:hidden;
margin:0;
padding:4px 0 0;
}

.article .vspacer,.join .row03 {
padding-bottom:10px;
}

.seller .holder .gig-desc p,.page .up-user p {
color:#212121;
}

.share-control a img,.share-control img {
border:0!important;
}

* html .thank-form input.radio,*+html .thank-form input.radio {
margin:0 4px 0 0;
}

.inbox-compose .title h2 strong,.inbox-message .title h2 strong,dl.subject-list a,.settings .heading a,.try a {
color:#2791b9;
}

dl.subject-list dt,.settings-form .photo dl dt {
float:left;
clear:left;
}

.notify-form .browse .reset-button,.spacer {
clear:both;
}

.inbox-message a,.gains-table td a,.alert a {
color:#008bbf;
}

.message-show .remark,.orders-row-dimmed td a {
color:#BBB;
}

.message-details-holder .l,.message-details-holder-compose .l {
width:90px;
}

.edit-gig .title h2,.user-notifications .title h2 {
font:1.833em Helvetica,Arial,sans-serif;
color:#474747;
margin:0 0 3px;
}

.orders,.page {
width:100%;
overflow:hidden;
margin:0 auto;
padding:7px 0 9px;
}

.orders .heading,.gains .heading {
width:100%;
overflow:hidden;
color:#a1a1a1;
margin:0 0 13px;
}

.orders .heading p,.gains .paging,.page .heading p {
margin:0 0 20px;
}

.sort ul a,.order-table td a,.page a,.typo a {
color:#008dc7;
}

.order-table,.gains-table {
width:100%;
border-collapse:collapse;
margin:0 0 4px;
}

.order-table tbody tr.first-child td,.order-table tbody tr:first-child td,.gains-table tbody tr.first-child td,.gains-table tbody tr:first-child td {
padding-top:11px;
}

.order-table thead td div,.gains-table thead td div {
padding:4px;
}

.order-table .status-complete,.gains-table .status-cleared,.balance-info .withdraw.active a,.add-nav ul a:hover,.add-nav ul .active a {
color:#009c00;
}

.manage .heading h2,.like-title h2 {
font-size:1.83em;
color:#474747;
font-weight:400;
margin:0;
}

.manage .action a.btn-normal,.manage .action a.btn-activate,.manage .action a.btn-suspend {
padding:4px 11px;
}

.section-devider-bar h2,.results-bar h2 {
float:left;
font-size:1.25em;
margin:0;
}

.section-devider-bar p,.results-bar p {
font-size:1.167em;
margin:0;
}

.add-nav,.add-nav-title {
height:1%;
overflow:hidden;
margin-bottom:8px;
}

.sidebar .useful .c,.sidebar .useful ul,.sidebar .ideas-box .c,.sidebar .ideas ul {
padding-bottom:0;
}

.page p,.page div,.orders-row td {
font-size:14px;
}

.page h2,.typo h2 {
font-size:1.53em;
font-weight:400;
}

.page input,textarea,.typo input,textarea {
float:left;
width:488px;
margin-right:21px;
background:#fff url(<?php echo $imageurl; ?>/bg-input.gif) repeat-x;
border:1px solid #bac1d2;
font:normal 16px Verdana,Geneva,sans-serif;
padding:0;
}

.page label,.typo label {
font-size:15px;
font-weight:400;
}

.order-details-form,.notifications-box {
height:1%;
overflow:hidden;
background:#c8ffb8;
border:1px solid #c1d5b4;
padding:7px 5px 14px 8px;
}

.notifications-box .small,.orders-row-dimmed td,.order-row .status-in-progress-ok {
font-size:12px;
}

select .fieldWithErrors,.gig-header STRONG.red {
color:red;
}

.seller-order-box .order-completed,.bg-gray {
background:#F9FEE8;
}

.bg-red,.seller-order-box .late {
background:#FEE9E8;
}

.progress-indicator-icon-notifycomp,.progress-indicator-icon-gigform,.progress-indicator-icon-message,.suggest-progress-indicator-icon-message {
float:right;
clear:both;
margin:5px;
}

.order-row .column3,.withdraw-note {
float:right;
width:200px;
}

.image-box-holder #photo2,.image-box-holder #photo3 {
float:left;
clear:none;
width:100px;
height:80px;
padding-left:40px;
cursor:pointer;
}