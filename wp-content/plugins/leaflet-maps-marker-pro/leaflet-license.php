<?php // Before trying to crack the plugin, please consider buying a pro license at https://www.mapsmarker.com. I have put hundreds of hours into the development of the plugin and without honest customers I will not be able to continue the development and support. Thanks for your understanding and your honesty! Robert
if (basename($_SERVER["\123CRIPT_FIL\105\116\101ME"]) == "leaflet-lice\156\163\145.php") { exit ("Please do not \141\143\143ess this f\151\154\145 directly.\040\124hanks!<br/\076\074a href='htt\160\163\072//www.m\141\160\163marker.\143\157\155/go'>w\167\167\056mapsma\162\153\145r.com</\141\076"); } ?><?php echo "\015\012<div class=\042\167\162ap\042>\015\012"; ?><?php $O1t=$lt->Oy; if (array_key_exists("user",$O1t)) { $l1u=$O1t["user"][0]["\145\155\141il"]; } else { $l1u=""; } if ( isset ($_POST["maps\137\155\141rker_pro_mul\164\151\163ite_propag\141\164\145"])) { $O1u= isset ($_POST["\155aps_marker_\160\162\157_license_mul\164\151\163ite"]) ? $_POST["\155\141ps_marker_pro_l\151\143\145nse_multisi\164\145"]: ""; if (!wp_verify_nonce($O1u,"\155aps_marker_pro_\154\151\143ense_multis\151\164\145")) exit ("<br/>".__("Se\143\165\162ity check fail\145\144\040- please c\141\154\154 this func\164\151\157n from th\145\040\141ccordin\147\040\141dmin p\141\147\145!","lmm").""); if (is_multisite()) { if (current_user_can("\141\143tivate_plugins")) { global $wpdb; $blogs=$wpdb->get_results( "\123ELECT `blog_id` F\122\117\115 {$wpdb->blogs}" ,ARRAY_A); if ($blogs) { $l1v=(get_option("\154\145afletmapsmark\145\162\160ro_license_ke\171") == TRUE) ? get_option("leafletmapsm\141\162\153erpro_license\137\153\145y"): ""; $O1v=(get_option("\154\145afletmapsmarkerpro\137\154\151cense_local\137\153\145y") == TRUE) ? get_option("lea\146\154\145tmapsmarkerpro_\154\151\143ense_local_key"): ""; foreach ($blogs as $blog) { switch_to_blog($blog["blo\147\137\151d"]); update_option("\154\145\141fletmapsmark\145\162\160ro_license_\153\145\171",$l1v); update_option("\154eafletmapsmarkerpr\157\137\154icense_loca\154\137\153ey",$O1v); } restore_current_blog(); } echo "<div\040\143\154ass=\042\165\160\144ated\042 \163\164\171le=\042p\141\144\144ing:5px;\042\076\074p>".__("License k\145\171\040was success\146\165\154ly propagate\144\040\164o all su\142\163\151tes","lmm")."</p></div>"; } } } include ("\151nc".DIRECTORY_SEPARATOR."admin-he\141\144\145r.php"); ?><?php echo "\015\012\015\012<h3 styl\145\075\042font-siz\145\072\0623px;\042\076"; ?><?php _e("\120ro License Set\164\151\156gs","lm\155"); ?><?php echo "\074/h3>\015\012\015\012<div class=\042\167\162ap\042>\015\012\015\012\011"; ?><?php if (O3() === TRUE) { echo "<p><di\166\040\143lass=\042\165\160\144ated\042 st\171\154\145=\042pad\144\151\156g:10px;marg\151\156\0720px;\042\076".sprintf(__("Y\157\165\040have installe\144\040\114eaflet Map\163\040\115arker Pro\040\157\156 a localh\157\163\164 instance\056\040Entering a \154\151\143ense ke\171\040\150ere is \156\157\164 mandat\157\162\171 but rec\157\155\155ended a\163\040\164his al\163\157\040allows\040\171ou to <a h\162\145\146=\042\045\061s\042 tar\147\145\164=\042_\142\154ank\042>o\160\145n support \164\151ckets</a>\056\040Please b\145\040aware th\141\164\040once \171\157u use th\145\040plugin o\156\040a live d\157\155\141in, \145\156\164erin\147\040a licen\163\145 key is\040\155andator\171\041","lm\155"),"https://www.maps\155\141\162ker.com/helpde\163\153")."</div></p>"; } ?><?php echo "\015\012\015\012\011"; ?><?php if ($lt->l17 && ! isset ($_POST["\155aps_marker_pro_r\145\147\151ster_free"])):; ?><?php echo "\015\012\011\011<div id=\042\155\145ssage\042 cl\141\163\163=\042upd\141\164\145d\042>\015\012\011\011\011\074\160><b>"; ?><?php echo $lt->l17; ?><?php echo "\074/b></p>\015\012\011\011</div\076\015\012\011"; ?><?php endif; ?><?php echo "\015\012\015\012\011"; ?><?php if (!$lt->l17 && $lt->Ox && ! isset ($_POST["maps_mark\145\162\137pro_register\137\146\162ee"])):; ?><?php echo "\015\012\011\011\074\144iv id=\042\155\145\163sage\042\040\143\154ass=\042\165\160\144ated\042\076\015\012\011\011\011\074p><b>"; ?><?php echo $lt->Ox; ?><?php echo "\074\057b></p>\015\012\011\011</div>\015\012\011"; ?><?php endif; ?><?php echo "\015\012\015\012\011"; ?><?php if ($O16 && !$lt->Ox):; ?><?php echo "\015\012\011\011\074div id=\042\155\145\163sage\042\040\143lass=\042up\144\141\164ed\042>\015\012\011\011\011\074\160><b>"; ?><?php _e("Your license was \141\143\164ivated succes\163\146\165lly!","\154\155m"); ?><?php echo "\074\057\142></p>\015\012\011\011</div>\015\012\011"; ?><?php endif; ?><?php echo "\015\012\015\012\011"; ?><?php if (empty($O14) && isset ($l14)):; ?><?php echo "\015\012\011\011<\144\151\166 id=\042m\145\163\163age\042 \143\154\141ss=\042up\144\141\164ed\042>\015\012\011\011\011\074\160><b>"; ?><?php _e($l14); ?><?php echo "\074\057b></p>\015\012\011\011</div>\015\012\011"; ?><?php endif; ?><?php echo "\015\012\015\012\011\074\146orm method=\042\160\157st\042>\015\012\011"; ?><?php wp_nonce_field("\155\141ps_marker_pro_lic\145\156\163e","ma\160\163\137marker_pro_licen\163\145"); ?><?php echo "\015\012\011\011"; ?><?php if (!$lt->lw):; ?><?php echo "\015\012\011\011\011<d\151\166\040class=\042\143\145\162tificate-\162\164\154\042><im\147\040\163rc=\042"; ?><?php echo LEAFLET_PLUGIN_URL; ?><?php echo "\151\156c/img/icon-\143\145\162tificate.png\042\040\167idth=\042\064\070\042 heigh\164\075\04238\042\040\141\154t=\042\151\143\157n certi\146\151\143ate\042\076\074/div>\015\012\011\011\011<\144\151\166 style=\042\146\157nt-siz\145\072\0616px;fo\156\164\055weigh\164\072\142old;\042\076"; ?><?php _e("\117\160tion A: activat\145\040\141n unexpirin\147\040\154icense key","lmm"); ?><?php echo "\074/div>\015\012\011\011\011<p st\171\154\145=\042marg\151\156\0720.4em 0 \061\145\155 0;\042\076"; ?><?php echo sprintf(__("\107\145t an unexpiring l\151\143\145nse key at %\061\044s and activat\145\040\164he licens\145\040\153ey below\072","lmm"),"<\141\040\150ref=\042htt\160\163\072//www.mapsmar\153\145\162.com/order\042\040\164arget=\042\137\142\154ank\042\076\155\141psmark\145\162\056com/ord\145\162\074/a>"); ?><?php echo "\074/p>\015\012\011\011"; ?><?php endif; ?><?php echo "\015\012\011\011<p>\015\012\011\011"; ?><?php if ($lt->lw) { if ($lt->Ox) { $l1w="background:#ff00\060\060\073color:#0\060\060\06000;"; } else { $l1w="background:#0\060\106\10600;color:#\060\060\060000;"; } } else { $l1w=""; } if ($lt->lw) { $O1w=__("\165\160date","lmm"); } else { $O1w=__("\141\143\164ivate","lmm"); } if (current_user_can("\141\143\164ivate_plugin\163")) { $lw=$lt->lw; $l1x=""; } else { $lw=__("visible for admin\163\040\157nly","\154\155\155"); $l1x="disabled\075\042\144isabled\042"; } ?><?php echo "\015\012\011\011<b>"; ?><?php _e("\114icense Key","lmm"); ?><?php echo "</b> <in\160\165\164 name=\042\154\145\141fletmapsma\162\153\145rpro_lice\156\163\145_key\042\040\164ype=\042te\170\164\042 styl\145\075\042width:\062\066\065px;"; ?><?php echo $l1w; ?><?php echo "\042\040\166alue=\042"; ?><?php echo $lw; ?><?php echo "\042\040\057\076 <input t\171\160\145=\042sub\155\151\164\042 cla\163\163\075\042but\164\157\156-primary\042\040\166alue=\042"; ?><?php echo $O1w; ?><?php echo "\042 "; ?><?php echo $l1x; ?><?php echo "\040\057>\015\012\011\011</p>\015\012\011\074/form>\015\012\015\012\011<h\162\040\156oshade s\151\172\145=\0421\042\040\163tyle=\042\155\141rgin:20\160\170\0400;bord\145\162\055top:1px\040\163\157lid #6\066\066666;\042\040\057>\015\012\015\012\011"; ?><?php if (!$lt->lw && !l10()):; ?><?php echo "\015\012\011\011\015\012\011\011"; ?><?php if (!empty($O14)):; ?><?php echo "\015\012\011\011\011\074div id=\042m\145\163\163age\042 \143\154\141ss=\042e\162\162\157r\042>\015\012\011\011\011\011"; ?><?php foreach ($O14 as $e):; ?><?php echo "\015\012\011\011\011\011\011\074\160><b>"; ?><?php _e($e); ?><?php echo "\074\057b></p>\015\012\011\011\011\011"; ?><?php endforeach; ?><?php echo "\015\012\011\011\011\074/div>\015\012\011\011"; ?><?php endif; ?><?php echo "\015\012\011\015\012\011\011"; ?><?php $O1x=get_option("\154eafletmapsmar\153\145\162pro_license_k\145\171\137trial"); if ($O1x != NULL) { $l1y="\144\151splay:none;"; $O1y="<p><\144\151\166 class=\042\165\160\144ated\042 \163\164\171le=\042c\154\145\141r:both;pad\144\151\156g:10px;\042\076".sprintf(__("\131\157u already sta\162\164\145d a free 30-\144\141\171-trial for\040\164his site - fr\145\145\040trial l\151\143\145nse key: \045\061\044s","lmm"),$O1x)."\074/div></p>"; $l1z="\144isabled=\042d\151\163\141bled\042"; } else { $l1y=""; $O1y=""; $l1z=""; } ?><?php echo "\015\012\011\011\015\012\011\011<div\040\143\154ass=\042\141\166\141tar-person\141\154\151zed-rtl\042\076\074img src\075\042"; ?><?php echo LEAFLET_PLUGIN_URL; ?><?php echo "inc\057\151\155g/avatar-p\145\162\163onalized.png\042\040\167idth=\042\064\070\042 heig\150\164\075\04248\042\040\141lt=\042\151\143\157n avat\141\162\042></div>\015\012\011\011<\144\151\166 style=\042\146\157nt-size\072\061\066px;fo\156\164\055weight\072\142\157ld;\042\076"; ?><?php _e("Option B: get\040\141\040personalize\144\040\164rial licens\145\040\153ey","lmm"); ?><?php echo "</div>\015\012\011\011<p>"; ?><?php echo __("You can test <i>M\141\160\163 Marker Pr\157\074\057i> for 30\040\144ays for free \167\151\164hout any \157\142\154igation\163\056","\154\155\155"); ?><?php echo "\074\057p>\015\012\011\011"; ?><?php echo $O1y; ?><?php echo "\015\012\011\011<div id=\042\162\145gister_free_t\162\151\141l_persona\154\151\172ed\042 s\164\171\154e=\042"; ?><?php echo $l1y; ?><?php echo "\042\076\015\012\011\011\011<form method=\042\160\157st\042>\015\012\011\011\011<\151\156\160ut type=\047\150\151dden' n\141\155\145='maps_\155\141\162ker_pro\137\162\145gister\137\146\162ee' valu\145\075'y' />\015\012\011\011\011\011\074table styl\145\075\042clear\055\142\157th;mar\147\151\156-top:1\065\160\170;\042\076\015\012\011\011\011\011\011<\164\162>\015\012\011\011\011\011\011\011<td><b>"; ?><?php _e("First \156\141\155e","lmm"); ?><?php echo "\074\057b></td>\015\012\011\011\011\011\011\011<td><input n\141\155\145=\042map\163\137\155arker_pro\137\146\151rst_name\042\040type=\042\164\145xt\042 st\171\154\145=\042w\151\144\164h:291px;\042\040value=\042"; ?><?php echo O13("\155\141ps_marker_pr\157\137\146irst_name"); ?><?php echo "\042\040\057></td>\015\012\011\011\011\011\011\074\057tr>\015\012\011\011\011\011\011\074tr>\015\012\011\011\011\011\011\011<td><b>"; ?><?php _e("\114\141st name","\154\155\155"); ?><?php echo "\074\057b></td>\015\012\011\011\011\011\011\011\074td><input\040\156\141me=\042\155\141\160s_marker_\160\162\157_last_na\155\145\042 type=\042\164\145xt\042\040\163\164yle=\042\167\151dth:291px;\042\040\166alue=\042"; ?><?php echo O13("\155\141ps_marker_pro_las\164\137\156ame"); ?><?php echo "\042 /><\057\164\144>\015\012\011\011\011\011\011\074\057tr>\015\012\011\011\011\011\011\074\164r>\015\012\011\011\011\011\011\011<td><b>"; ?><?php _e("\105-mail","lmm"); ?><?php echo "\074\057b></td>\015\012\011\011\011\011\011\011<td><input na\155\145\075\042maps\137\155\141rker_pro_\145\155\141il\042\040\164\171pe=\042\164\145xt\042 st\171\154\145=\042w\151\144\164h:291px\073\042\040value=\042"; ?><?php echo O13("\155aps_marker_pro\137\145\155ail"); ?><?php echo "\042 /></td>\015\012\011\011\011\011\011\074/tr>\015\012\011\011\011\011\011\074tr>\015\012\011\011\011\011\011\011\074td></t\144\076\015\012\011\011\011\011\011\011\074td><input\040\164\171pe=\042\143\150eckbox\042\040\156ame=\042m\141\160\163_marker\137\160\162o_tos\042\040\166alue=\042\131\145s\042 \143\150\145cked=\042\143\150ecked\042\040\057> "; ?><?php echo sprintf(__("I hav\145\040\162ead the <a hr\145\146\075\042%1\044\163\042 target=\042\137\142lank\042>Te\162\155\163 of Serv\151\143\145</a> and \074\141 href=\042\045\062\044s\042\040\164\141rget=\042\137\142lank\042\076\120rivacy Poli\143\171\074/a>.","\154\155m"),"\150\164tps://www.map\163\155\141rker.com/terms-\157\146\055services","h\164\164\160s://www.mapsma\162\153\145r.com/privac\171\055\160olicy"); ?><?php echo "\074\057td>\015\012\011\011\011\011\011\074\057tr>\015\012\011\011\011\011"; ?><?php echo "\074\164r><td></td><td><\151\156\160ut type=\042\163\165bmit\042 cl\141\163\163=\042but\164\157\156-primary\042\040\166alue=\042".__("Start personalized \146\162\145e 30-day tria\154\040\160eriod","lmm")."\042 ".$l1z." /></td></tr>"; ?><?php echo "\015\012\011\011\011\011\074\057table>\015\012\011\011\011</f\157\162\155>\015\012\011\011</div><!--\162\145\147ister_f\162\145\145_trial_\160\145\162sonali\172\145\144 div-->\015\012\011\015\012\011\011<hr nos\150\141\144e size\075\0421\042 sty\154\145\075\042m\141\162\147in:20p\170\0400;border-t\157\160\0721px s\157\154\151d #66\066\06666;\042 /\076\015\012\011\011\015\012\011\011\074div cla\163\163\075\042\141\166atar-ano\156\171\155ous-r\164\154\042><im\147\040src=\042"; ?><?php echo LEAFLET_PLUGIN_URL; ?><?php echo "\151\156\143/img/avata\162\055\141nonymous.pn\147\042\040width=\042\063\064\042 hei\147\150\164=\04234\042\040\141lt=\042\151\143on avatar\040\141\156onymou\163\042\076</div>\015\012\011\011<\144\151\166 style\075\042font-weigh\164\072bold;\042\076"; ?><?php _e("O\160\164\151on C: get an a\156\157\156ymous tri\141\154\040license ke\171","\154\155\155"); ?><?php echo "<\057\144\151v>\015\012\011\011"; ?><?php echo $O1y; ?><?php echo "\015\012\011\011\074\144\151v id=\042\162\145\147ister_free\137\164\162ial_anonym\042\040\163tyle=\042"; ?><?php echo $l1y; ?><?php echo "\042>\015\012\011\011\011<form me\164\150\157d=\042post\042\076\015\012\011\011\011<input typ\145\075\047hidden'\040\156ame='maps_m\141\162\153er_pro_\162\145\147ister_fr\145\145\137anonym'\040\166\141lue='y'\040\057>\015\012\011\011\011<span\040\151d=\042opt\151\157\156-b-hid\145\042\076<a st\171\154\145=\042\164\145\170t-deco\162\141\164ion:no\156\145\073curso\162\072pointer;\042\076"; ?><?php _e("Click here for more \151\156\146ormation","\154\155m"); ?><?php echo "\074\057\141></span>\015\012\011\011\011<\144\151\166 id=\042\157\160\164ion-b-show\042\040style=\042\144\151\163play:non\145\073\042>\015\012\011\011\011"; ?><?php echo sprintf(__("\120lease note tha\164\040\151n contrast t\157\040\141 personaliz\145\144\040trial lic\145\156\163e you wil\154\040\156ot be a\142\154\145 to <a \150\162\145f=\042%\061\163\042 targe\164\075\042_blank\042\076open suppo\162\164\040tickets\074\057a> and ge\164\040a reminder\040\167hen your t\162\151\141l lice\156\163\145 has e\170\160\151red!","\154mm"),"\150\164tps://www.maps\155\141\162ker.com/help\144\145\163k"); ?><?php echo "\015\012\011\011\011<\160\076\074input type\075\042\143heckbox\042\040\156ame=\042m\141\160\163_marker_p\162\157\137tos\042\040\166\141lue=\042\131\145s\042 ch\145\143\153ed=\042\143\150\145cked\042\040\057> "; ?><?php echo sprintf(__("\111\040have read the <a\040\150\162ef=\042%\061\044\163\042 targ\145\164\075\042_bl\141\156\153\042>Ter\155\163\040of Serv\151\143\145</a> an\144\040\074a href\075\042\0452\044\163\042\040target\075\042\137blank\042\076\120rivacy \120\157\154icy</a\076\056","lmm"),"\150ttps://www.maps\155\141\162ker.com/ter\155\163\055of-service\163","htt\160\163\072//www.mapsma\162\153\145r.com/privacy\055\160\157licy"); ?><?php echo "\074\057p>\015\012\011\011\011"; ?><?php echo "<input ty\160\145\075\042submi\164\042\040class=\042\142\165\164ton-prim\141\162\171\042 va\154\165\145=\042".__("\123\164\141rt anonymous fr\145\145\04030-day tria\154\040\160eriod","lmm")."\042 ".$l1z." />"; ?><?php echo "\015\012\011\011\011</form>\015\012\011\011\011\074\057div>\015\012\011\011</div><!--r\145\147\151ster_fr\145\145\137trial_a\156\157\156ym div-\055\076\015\012\011\015\012\011\011\074\150r nosha\144\145\040size=\042\061\042 style\075\042margin:20p\170\0400;border-\164\157\160:1px so\154\151\144 #6666\066\066;\042 />\015\012\011\015\012\011\011<div\040\143lass=\042\151\143on-localh\157\163t-rtl\042\076\074img src\075\042"; ?><?php echo LEAFLET_PLUGIN_URL; ?><?php echo "\151\156\143/img/icon-lo\143\141\154host.png\042\040\167idth=\042\063\064\042 heigh\164\075\04234\042\040\141\154t=\042\151\143on localho\163\164\042></div\076\015\012\011\011\074\144iv styl\145\075\042font-\167\145\151ght:bol\144\073\042>"; ?><?php _e("Opt\151\157\156 D: start an \165\156\154imited, ano\156\171\155ous test on\040\141\040localhos\164\040\151nstallat\151\157\156","\154mm"); ?><?php echo "\074\057div>\015\012\011\011"; ?><?php echo sprintf(__("\111\146 you install L\145\141\146let Maps Ma\162\153\145r Pro on a\040\154\157calhost \151\156\163tallation\040\050<a href=\042\045\061s\042 \164\141\162get=\042\137\142lank\042>\163\145\145 availa\142\154\145 packag\145\163\074/a>), \162\145\147isterin\147\040a free 30-\144\141\171 trial\040\154icense key\040\151s not man\144\141\164ory an\144\040the plugin\040\143an also \142\145\040teste\144\040without t\151\155e limitat\151\157n.","\154mm"),"\150\164tp://en.wi\153\151\160edia.org/wiki\057\114\151st_of_AMP_\160\141\143kages"); ?><?php echo "\015\012\011"; ?><?php endif; ?><?php echo "\015\012\015\012\011<p>\015\012\011"; ?><?php if (la($Oa=l0,$lb=FALSE) === TRUE) { if (($lt->lw) && ($l1u != NULL)) { echo "\074\160><strong>".__("\114\151\143ense registered \164\157","lmm")."\072</strong> ".$O1t["\143\165\163tomer"]["n\141\155\145"]."\074\057p>"; } if ((la($Oa=FALSE,$lb=TRUE) === TRUE) && (la() === TRUE)) { if (!l10()) { $ly=$lt->Oy["\154\151cense_expires"]; $O1z=abs(floor((time()-$ly)/(074*074*030))); if ($ly != NULL) { echo "<st\162\157\156g>".__("Free tr\151\141\154 license is v\141\154\151d until:","lmm")."\074/strong> ".date("\144\057m/Y",$ly)." (".$O1z."\040".__("days left","lmm")."\051 <span style=\042\146\157nt-family:seri\146\073\042>&rarr;<\057\163\160an> <a s\164\171\154e=\042t\145\170t-decoratio\156\072\156one;\042\040\150ref=\042\150\164\164ps://ww\167\056mapsmarker.\143\157\155/order\042\040\164arget=\042\137\142lank\042\076".__("\143\154ick here to get a\040\156\157n-expiring l\151\143\145nse key","lmm")."\074/a>"; } } else { $ly=$lt->Oy["download_access_\145\170\160ires"]; $O1z=abs(floor((time()-$ly)/(074*074*030))); echo "<strong>".__("\101ccess to plug\151\156\040updates and \163\165\160port area va\154\151\144 until:","\154\155m")."\074/strong> ".date("d/m/Y",$ly)." \050".$O1z." ".__("\144ays\040left","\154\155\155")."\051"; } } else if ((la($Oa=FALSE,$lb=TRUE) === TRUE) && (la() === FALSE)) { $l5=get_option("\154\145afletmapsma\162\153\145r_version_pr\157"); echo "\074div id='mess\141\147\145' class='err\157\162\047 style='pa\144\144\151ng:5px;'\076\074strong>".__("Warning: yo\165\162\040access to u\160\144\141tes and supp\157\162\164 for Leafl\145\164\040Maps Mark\145\162\040Pro has\040\145\170pired!","lmm")."\074/strong><br/>"; if ($lc>$l5) { echo __("\114atest available v\145\162\163ion:","\154mm")."\040<a href='htt\160\163\072//www.mapsm\141\162\153er.com/v".$lc."\160' target='_bl\141\156\153' title='".esc_attr__("click \164\157\040show release \156\157\164es","\154mm")."\047>".$lc."\074\057a> "."(<a href='www\056\155\141psmarker.co\155\057\143hangelog/\160\162\157/' target=\047\137\142lank'>".__("show all avail\141\142\154e changelog\163","\154mm")."\074/a>)<br/>"; } echo sprintf(__("You ca\156\040\143ontinue usin\147\040\166ersion %s \167\151\164hout any l\151\155\151tations. \116\145\166ertheless\040\171\157u will\040\156\157t be a\142\154\145 to get \165\160\144ates inc\154\165\144ing bug\146\151\170es, new\040\146\145atures\040\141\156d opti\155\151\172ations \141\163\040well a\163\040access to\040\157ur support\040\163ystem. ","\154mm"),$l5)."\074/div>"; if (current_user_can("activate_plugins")) { echo "<a \150\162\145f=\042https\072\057/www.mapsmarke\162\056\143om/renew\042\040\164arget=\042\137\142lank\042  \163\164\171le=\042\146\157nt-size:12\065\045;font-weig\150\164\072bold;\042\076\046raquo; ".__("please clic\153\040\150ere to rene\167\040\171our access\040\164\157 plugin u\160\144\141tes and s\165\160\160ort","\154\155m")."\040&laquo;</a>"; echo "\074p>".__("\111\155\160ortant: pleas\145\040\143lick the u\160\144\141te butto\156\040\156ext to t\150\145\040license \153\145\171 after \160\165\162chasin\147\040a renewal \164\157\040finish \171\157\165r orde\162\056","lmm")."\074/p>"; } else { echo "\074span style=\042\146\157nt-size:125%\073\146\157nt-weight:\142\157\154d;\042>".sprintf(__("Pl\145\141\163e contact your\040\141\144ministrato\162\040\050%1s) to \162\145\156ew your a\143\143\145ss to plu\147\151\156 update\163\040and support\056","\154\155m"),"\074\141\040href=\042\155\141\151lto:".get_bloginfo("\141\144\155in_email")."?subject=".esc_attr__("Maps Marke\162\040\120ro - renewal \146\157\162 access to p\154\165\147in updates\040\141\156d support\040\156\145eded","lmm")."\042\076".get_bloginfo("admin_email")."</a>")."\074/span>"; } } } else if (($lt->lw) && (la($Oa=FALSE,$lb=TRUE) === TRUE) && (la($Oa=l0,$lb=FALSE) === FALSE)) { if (current_user_can("activat\145\137\160lugins")) { $l20="\150\164tps://www.mapsma\162\153\145r.com/updat\145\163\055pro/archi\166\145"; echo "\074div id='message\047\040\143lass='error\047\040\163tyle='paddi\156\147\0725px;'><st\162\157\156g>".sprintf(__("Error: Th\151\163\040version of \164\150\145 plugin was\040\162\145leased aft\145\162\040your dow\156\154\157ad acces\163\040\145xpired.\040\120lease <a h\162\145\146=\042%\061\044s\042 tar\147\145\164=\042_\142\154\141nk\042\076\162enew your \144\157\167nload a\156\144 support a\143\143\145ss</a>\040\157r <a href\075\042%2\044s\042\040\164arget=\042\137\142lank\042\076\144owngra\144\145 to your \160\162\145vious\040\166alid ver\163\151\157n</a>\056","lmm"),"\150ttps://www.mapsm\141\162\153er.com/renew",$l20)."</\163\164\162ong></div>"; } else { echo "<div id=\047\155\145ssage' clas\163\075\047error' styl\145\075\047padding\072\065\160x;'><str\157\156\147>".sprintf(__("Error: This vers\151\157\156 of the plu\147\151\156 was releas\145\144\040after you\162\040\144ownload \141\143\143ess expi\162\145\144. Pleas\145\040contact yo\165\162\040admini\163\164\162ator (%\061\163\051 to r\145\156\145w your \141\143\143ess to \160\154ugin updat\145\163\040and su\160\160\157rt or \164\157\040downg\162\141\144e to y\157\165\162 previ\157\165s valid v\145\162\163ion.","\154\155m"),"<a href=\042m\141\151\154to:".get_bloginfo("\141\144min_email")."?subj\145\143\164=".esc_attr__("\115\141ps Marker Pro\040\055\040renewal f\157\162\040access to\040\160\154ugin upda\164\145\163 and sup\160\157\162t needed","lmm")."\042\076".get_bloginfo("\141\144\155in_email")."</a>")."</strong></div>"; } } ?><?php echo "\015\012\011</p>\015\012\015\012\011"; ?><?php if (current_user_can("\141ctivate_plugins")) { if (($lt->lw) && ($l1u != "\141\156onym@mapsmar\153\145\162.com")) { echo "\074\160\076".sprintf(__("\120\154ease note that\040\141\040license is \142\157\165nd to the d\157\155\141in it was\040\141\143tivated \157\156\041 If you\040\167\141nt to \165\163\145 your l\151\143\145nse on a\156\157\164her dom\141\151\156, pleas\145\040follow the\040\164utorial at\040\074a href=\042\045\061\044s\042\040target=\042\137\142lank\042\076\0452\044s</\141\076","\154mm"),"\150\164\164ps://www.mapsm\141\162\153er.com/tran\163\146\145r\042 st\171\154\145=\042tex\164\055\144ecoratio\156\072\156one;","mapsmarker.co\155\057\164ransfer")."\074\057\160>"; echo "<p>".sprintf(__("If you\040\150\141ve any issue\163\040\167ith your li\143\145\156se, <a hr\145\146\075\042%1\044\163\042 target=\042\137\142lank\042\076\160lease op\145\156\040a new \163\165\160port ti\143\153\145t</a>!","lmm"),"http\163\072\057/www.mapsmark\145\162\056com/store/\143\165\163tomers/in\144\145\170.php?tas\153\075\154ogin&ema\151\154\137login=".$l1u."\042 style=\042\164\145\170t-decoration:\156\157\156e;")."\074\057p>"; } } ?><?php echo "\015\012\015\012\011"; ?><?php if (is_multisite()) { if (current_user_can("activate_plugins")) { echo "\074\150\162 noshade siz\145\075\0421\042 st\171\154\145=\042bor\144\145\162-top:1px \163\157\154id #6666\066\066;\042 /><h\063\040style=\042\146\157nt-size:18\160\170\073\042>".__("\127\157rdPress Multi\163\151\164e settings","\154mm")."\074/h3>"; echo "<p>".__("\125se the button b\145\154\157w to propagat\145\040\164he licens\145\040\153ey entere\144\040above to al\154\040\127ordPres\163\040\115ultisi\164\145\040subsit\145\163\056","\154\155\155")."\074/p>"; if ((SUBDOMAIN_INSTALL == TRUE) || is_plugin_active("\167ordpress-mu-doma\151\156\055mapping/dom\141\151\156_mapping.p\150\160")) { echo "<p>".__("Important: y\157\165\040seem to be \165\163\151ng different\040\144\157mains fo\162\040\171our subs\151\164\145s. Pleas\145\040make sure \164\150\141t your \154\151\143ense ke\171\040is valid fo\162\040\164he num\142\145\162 of dom\141\151\156s you w\141\156\164 to us\145\040it on and \165\160\144ate th\145\040license ke\171\040on each s\165\142\163ite di\162\145\143tly fi\162\163t before \160\162opagating\040\164he licen\163\145 key! Thi\163\040will en\163\165\162e tha\164\040all the\163\145 domains\040\141re re\147\151stered\040\157n your \143\165stomer \160\162ofile o\156\040mapsma\162\153er.com\040\055 whic\150\040will r\145\163ult in\040\141 valid\040\154icens\145\040valid\141\164ion on\040\163ubsit\145\163 after\040\160ropa\147\141ting t\150\145 lice\156\163e key\056","lmm")."\074\057p>"; } echo "<form method=\042\160\157\163t\042>"; wp_nonce_field("\155\141\160s_marker_pro\137\154\151cense_multisi\164\145","map\163\137\155arker_pro_licens\145\137\155ultisite"); echo "<input type=\042\143\150eckbox\042\040\156\141me=\042m\141\160\163_marker_pro\137\155\165ltisite_p\162\157\160agate\042\040\057> <label\040\146\157r=\042\155\141\160s_marke\162\137\160ro_mult\151\163\151te_prop\141\147\141te\042\076".__("Yes I want to \160\162\157pagate the l\151\143\145nse ke\171\040to all subsit\145\163","lmm")."</label>"; echo " <input type=\042\163\165bmit\042 c\154\141\163s=\042bu\164\164\157n-primary\042\040value=\042".__("upda\164\145","\154\155m")."\042\040/>"; } } ?><?php echo "\015\012<\057\144\151v>\015\012\074\163cript type=\042\164\145xt/javascri\160\164\042>\015\012\057\057info: sh\157\167\040anonym\157\165\163 regist\145\162\040button\015\012\050functi\157\156\050\044)\040\173\015\012\011\044\050'#opt\151\157\156-b-hide\047\051.click(fu\156\143\164ion(e)\040\173\015\012\011\011\011\044\050\047#option-b\055\150ide').hid\145\050);\015\012\011\011\011\044\050\047#opti\157\156\055b-sho\167\047).show()\073\015\012\011\175\051;\015\012\175)(jQuery\051\015\012</\163\143ript>\015\012\074!--w\162\141p-->\015\012"; ?><?php include ("\151nc".DIRECTORY_SEPARATOR."admin-\146\157\157ter.php"); ?>