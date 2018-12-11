<!DOCTYPE html>
<html lang="en">
<head>
	<title>http://validaotr.kldp.org/ VALIDATE images</title>

	<meta charset="utf-8">
	<link rel="shortcut icon" href="//validator.kldp.org/favicon.ico" type="image/x-icon">
	<link rev="start" href="../" title="Home Page" />
	<style type="text/css" media="all">
		@import "../style/base.css";
	</style>

    <script src="../scripts/oops.js"></script>
    <meta name="keywords" content="HTML, HyperText Markup Language, Validation, W3C Markup Validation Service" />
    <meta name="description" content="STML 파서 기반의 쉽게 사용할 수 있는 W3C 의 HTML 검사 서비스" />
    
    <link rel="alternate" type="application/atom+xml" href="http://www.w3.org/QA/Tools/validator-whatsnew.atom" />
</head>

<body>
   <div id="banner">
	<h1 id="title">
	  <a href="http://www.w3.org/"><img alt="W3C" width="110" height="61" id="logo" src="../images/w3c.png" /></a>
			<a href="./."><span>Markup 검증 서비스</span></a>
	  </h1>
	  <p id="tagline">웹 문서의 마크업(HTML, XHTML, …)을 검사 하십시오</p>
   </div>

	<div id="frontforms" style="text-align: center;"><div style="display: inline-block; margin-bottom: 30px;">
	<h2>KLDP validator images</h2>
<?php
if ( extension_loaded ('korean') ) {
	$list = filelist_lib ('./validate', 'f', '\.(png|jpg|gif)');
} else {
	require_once 'eFilesystem.php';
	$list = eFilesystem::find ('./validate', '/\.(png|jpg|gif)/');
}

if ( is_array ($list) ) {
	$new_list = array ();
	foreach ( $list as $k ) {
		$bname = basename ($k);
		if ( preg_match ('/((x?html|xml|css)(\d{1,3})?)-([a-z]+)\.(png|jpg|gif)$/', $bname, $m) ) {
			$key = $m[1];

			$new_list[$key][] = $k;
		}
	}

	foreach ( $new_list as $k => $v ) {
		sort ($new_list[$k]);
	}

	unset ($list);
	$list = &$new_list;
}

foreach ( $list as $key => $val ) {
	foreach ( $val as $v ) {
		$tr .= sprintf (
			'<tr><td><img src="%s" alt="%s" title="%s"></td></tr>' . PHP_EOL,
			$v, $v, $v
		);
	}

	echo <<<EOF
	<div style="display: inline-block;">
		<h3>{$key}</h3>

		<table>
			{$tr}
		</table>
	</div>
EOF;
	$tr = null;
}

?>
	</div></div>


	<ul class="navbar" id="menu"><li><a href="../" accesskey="1" title="W3C Markup Validation 서비스 홈">홈</a><span> | </span></li>
	<li><a href="../about.html" title="이 서비스에 대한 정보">정보</a><span> | </span></li>
	<li><a href="../whatsnew.html" title="이 서비스의 최근 변경 사항">뉴스</a><span> | </span></li>
	<li><a href="../docs/" accesskey="3" title="이 서비스에 대한 문서">문서</a><span> | </span></li>
	<li><a href="../docs/help.html" title="도움말과 잦은 질문에 대한 답변">도움말&nbsp;&amp;&nbsp;<acronym title="Frequently Asked Questions">FAQ</acronym></a><span> | </span></li>
	<li><a href="../feedback.html" accesskey="4" title="이 서비스에 대한 피드백 제공 방법">피드백</a><span> | </span></li>
	<li><a href="../contribute.html" title="validator 프로젝트에 공헌을 하는 방법">공헌</a><span> | </span></li>
	<li><a href="../checklink" title="Markup 문서 수정후, W3C 링크 체커로 링크를 수정 하세요.">링크 체크</a><span> | </span></li>
	<li><a href="http://css-validator.kldp.org/" title="KLDP CSS Validator">CSS 검사</a><span> | </span></li></ul>

	<div id="footer">
			<p id="activity_logos">
			<a href="http://www.w3.org/Status" title="W3C's Open Source는 당신에게 자유로운 웹 품질 관리 도구와 그 이상을 가져다 줍니다."><img src="../images/w3c_home_nb.png" alt="W3C" width="72" height="47" /><img src="../images/opensource-55x48.png" alt="Open-Source" title="우리는 Open Source/Free Software로 인증받은 것으로 만들었습니다. - www.opensource.org를 참조 하십시오." width="55" height="48" /></a>
			</p>

			<p id="support_logo">
				<a href="http://www.w3.org/QA/Tools/Donate">
				<img src="../images/I_heart_validator.png" alt="I heart Validator logo" title="Validator 후원 프로그램" width="80" height="15" />
				</a>
			</p>
		<p id="version_info">
		이 W3C Markup Validator 의 버전은 <a href="./whatsnew.html#v13"><abbr title="version">v</abbr>1.3</a> 입니다.
		</p>

		<p class="copyright">
			<a rel="Copyright" href="http://www.w3.org/Consortium/Legal/ipr-notice#Copyright">Copyright</a> &copy; 1994-2012
			<a href="http://www.w3.org/"><acronym title="World Wide Web Consortium">W3C</acronym></a>&reg;

			(<a href="http://www.csail.mit.edu/"><acronym title="Massachusetts Institute of Technology">MIT</acronym></a>,
			<a href="http://www.ercim.eu/"><acronym title="European Research Consortium for Informatics and Mathematics">ERCIM</acronym></a>,
			<a href="http://www.keio.ac.jp/">Keio</a>),
			All Rights Reserved.
			W3C <a href="http://www.w3.org/Consortium/Legal/ipr-notice#Legal_Disclaimer">liability</a>,
			<a href="http://www.w3.org/Consortium/Legal/ipr-notice#W3C_Trademarks">trademark</a>,
			<a rel="Copyright" href="http://www.w3.org/Consortium/Legal/copyright-documents">document use</a>

			and <a rel="Copyright" href="http://www.w3.org/Consortium/Legal/copyright-software">software licensing</a>

			rules apply. Your interactions with this site are in accordance
			with our <a href="http://www.w3.org/Consortium/Legal/privacy-statement#Public">public</a> and
			<a href="http://www.w3.org/Consortium/Legal/privacy-statement#Members">Member</a> privacy
			statements.
		</p>
	</div>

</body>
</html>
