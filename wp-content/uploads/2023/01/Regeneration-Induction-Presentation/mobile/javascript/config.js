	var aliasConfig = {
appName : ["", "", ""],
totalPageCount : [],
largePageWidth : [],
largePageHeight : [],
normalPath : [],
largePath : [],
thumbPath : [],

ToolBarsSettings:[],
TitleBar:[],
appLogoIcon:["appLogoIcon"],
appLogoLinkURL:["appLogoLinkURL"],
bookTitle : [],
bookDescription : [],
ButtonsBar : [],
ShareButton : [],
ShareButtonVisible : ["socialShareButtonVisible"],
ThumbnailsButton : [],
ThumbnailsButtonVisible : ["enableThumbnail"],
ZoomButton : [],
ZoomButtonVisible : ["enableZoomIn"],
FlashDisplaySettings : [],
MainBgConfig : [],
bgBeginColor : ["bgBeginColor"],
bgEndColor : ["bgEndColor"],
bgMRotation : ["bgMRotation"],
backGroundImgURL : ["mainbgImgUrl","innerMainbgImgUrl"],
pageBackgroundColor : ["pageBackgroundColor"],
flipshortcutbutton : [],
BookMargins : [],
topMargin : [],
bottomMargin : [],
leftMargin : [],
rightMargin : [],
HTMLControlSettings : [],
linkconfig : [],
LinkDownColor : ["linkOverColor"],
LinkAlpha : ["linkOverColorAlpha"],
OpenWindow : ["linkOpenedWindow"],
searchColor : [],
searchAlpha : [],
SearchButtonVisible : ["searchButtonVisible"],

productName : [],
homePage : [],
enableAutoPlay : ["autoPlayAutoStart"],
autoPlayDuration : ["autoPlayDuration"],
autoPlayLoopCount : ["autoPlayLoopCount"],
BookMarkButtonVisible : [],
googleAnalyticsID : ["googleAnalyticsID"],
OriginPageIndex : [],	
HardPageEnable : ["isHardCover"],	
UIBaseURL : [],	
RightToLeft: ["isRightToLeft"],	

LeftShadowWidth : ["leftPageShadowWidth"],	
LeftShadowAlpha : ["pageShadowAlpha"],
RightShadowWidth : ["rightPageShadowWidth"],
RightShadowAlpha : ["pageShadowAlpha"],
ShortcutButtonHeight : [],	
ShortcutButtonWidth : [],
AutoPlayButtonVisible : ["enableAutoPlay"],	
DownloadButtonVisible : ["enableDownload"],	
DownloadURL : ["downloadURL"],
HomeButtonVisible :["homeButtonVisible"],
HomeURL:['btnHomeURL'],
BackgroundSoundURL:['bacgroundSoundURL'],
//TableOfContentButtonVisible:["BookMarkButtonVisible"],
PrintButtonVisible:["enablePrint"],
toolbarColor:["mainColor","barColor"],
loadingBackground:["mainColor","barColor"],
BackgroundSoundButtonVisible:["enableFlipSound"],
FlipSound:["enableFlipSound"],
MiniStyle:["userSmallMode"],
retainBookCenter:["moveFlipBookToCenter"],
totalPagesCaption:["totalPageNumberCaptionStr"],
pageNumberCaption:["pageIndexCaptionStrs"]
};
var aliasLanguage={
frmPrintbtn:["frmPrintCaption"],
frmPrintall : ["frmPrintPrintAll"],
frmPrintcurrent : ["frmPrintPrintCurrentPage"],
frmPrintRange : ["frmPrintPrintRange"],
frmPrintexample : ["frmPrintExampleCaption"],
btnLanguage:["btnSwicthLanguage"],
btnTableOfContent:["btnBookMark"]
}
;
	var bookConfig = {
	appName:'flippdf',
	totalPageCount : 0,
	largePageWidth : 1080,
	largePageHeight : 1440,
	normalPath : "files/page/",
	largePath : "files/large/",
	thumbPath : "files/thumb/",
	
	ToolBarsSettings:"",
	TitleBar:"",
	appLogoLinkURL:"",
	bookTitle:"FLIPBUILDER",
	bookDescription:"",
	ButtonsBar:"",
	ShareButton:"",
	
	ThumbnailsButton:"",
	ThumbnailsButtonVisible:"Show",
	ZoomButton:"",
	ZoomButtonVisible:"Yes",
	FlashDisplaySettings:"",
	MainBgConfig:"",
	bgBeginColor:"#cccccc",
	bgEndColor:"#eeeeee",
	bgMRotation:45,
	pageBackgroundColor:"#FFFFFF",
	flipshortcutbutton:"Show",
	BookMargins:"",
	topMargin:10,
	bottomMargin:10,
	leftMargin:10,
	rightMargin:10,
	HTMLControlSettings:"",
	linkconfig:"",
	LinkDownColor:"#808080",
	LinkAlpha:0.5,
	OpenWindow:"_Blank",

	BookMarkButtonVisible:'true',
	productName : 'Demo created by Flip PDF',
	homePage : 'http://www.flipbuilder.com/',
	isFlipPdf : "true",
	TableOfContentButtonVisible:"true",
	searchTextJS:'javascript/search_config.js',
	searchPositionJS:undefined
};
	
	
	;bookConfig.BookTemplateName="metro";bookConfig.loadingCaptionFontSize="20";bookConfig.loadingCaptionColor="#DDDDDD";bookConfig.loadingBackground="#323232";bookConfig.loadingPictureHeight="150";bookConfig.showLoadingGif="Yes";bookConfig.loadingDisplayTime="0";bookConfig.appLogoIcon="files/mobile-ext/appLogoIcon.png";bookConfig.appLogoLinkURL="https://www.johnfhuntregeneration.co.uk";bookConfig.appLogoOpenWindow="Blank";bookConfig.logoHeight="40";bookConfig.logoPadding="0";bookConfig.logoTop="0";bookConfig.toolbarColor="#000000";bookConfig.iconColor="#ECF5FB";bookConfig.pageNumColor="#000000";bookConfig.iconFontColor="#C6C6C6";bookConfig.toolbarAlwaysShow="No";bookConfig.ToolBarVisible="Yes";bookConfig.formFontColor="#FFFFFF";bookConfig.formBackgroundColor="#27181A";bookConfig.ToolBarAlpha="1";bookConfig.CurlingPageCorner="Yes";bookConfig.showBookInstructionOnStart="false";bookConfig.InstructionsButtonVisible="Show";bookConfig.showInstructionOnStart="No";bookConfig.showGotoButtonsAtFirst="No";bookConfig.QRCode="Hide";bookConfig.HomeButtonVisible="Hide";bookConfig.HomeURL="%first page%";bookConfig.aboutButtonVisible="Hide";bookConfig.enablePageBack="Show";bookConfig.ShareButtonVisible="Show";shareObj = [];bookConfig.addCurrentPage="No";bookConfig.EmailButtonVisible="Show";bookConfig.btnShareWithEmailBody="{link}";bookConfig.ThumbnailsButtonVisible="Show";bookConfig.thumbnailColor="#333333";bookConfig.thumbnailAlpha="70";bookConfig.ThumbnailSize="small";bookConfig.BookMarkButtonVisible="Hide";bookConfig.TableOfContentButtonVisible="Show";bookConfig.isHideTabelOfContentNodes="yes";bookConfig.SearchButtonVisible="Show";bookConfig.leastSearchChar="3";bookConfig.searchKeywordFontColor="#FFB000";bookConfig.searchHightlightColor="#ffff00";bookConfig.SelectTextButtonVisible="Show";bookConfig.PrintButtonVisible="Hide";bookConfig.BackgroundSoundButtonVisible="Show";bookConfig.FlipSound="Yes";bookConfig.BackgroundSoundLoop="-1";bookConfig.bgSoundVol="50";bookConfig.AutoPlayButtonVisible="Show";bookConfig.autoPlayAutoStart="No";bookConfig.autoPlayDuration="9";bookConfig.autoPlayLoopCount="1";bookConfig.ZoomButtonVisible="Show";bookConfig.maxZoomWidth="1400";bookConfig.defaultZoomWidth="1000";bookConfig.mouseWheelFlip="Yes";bookConfig.ZoomMapVisible="Hide";bookConfig.DownloadButtonVisible="Hide";bookConfig.PhoneButtonVisible="Hide";bookConfig.AnnotationButtonVisible="Hide";bookConfig.FullscreenButtonVisible="Show";bookConfig.MagnifierButtonVisible="Hide";bookConfig.bgBeginColor="#E2E2E2";bookConfig.bgEndColor="#E2E2E2";bookConfig.bgMRotation="90";bookConfig.backGroundImgURL="files/mobile-ext/backGroundImgURL.jpg";bookConfig.backgroundPosition="stretch";bookConfig.backgroundOpacity="100";bookConfig.backgroundScene="None";bookConfig.LeftShadowWidth="90";bookConfig.LeftShadowAlpha="0.6";bookConfig.RightShadowWidth="55";bookConfig.RightShadowAlpha="0.6";bookConfig.ShowTopLeftShadow="Yes";bookConfig.pageHighlightType="magazine";bookConfig.HardPageEnable="No";bookConfig.hardCoverBorderWidth="8";bookConfig.borderColor="#572F0D";bookConfig.outerCoverBorder="Yes";bookConfig.cornerRound="8";bookConfig.leftMarginOnMobile="0";bookConfig.topMarginOnMobile="0";bookConfig.rightMarginOnMobile="0";bookConfig.bottomMarginOnMobile="0";bookConfig.pageBackgroundColor="#E8E8E8";bookConfig.flipshortcutbutton="Show";bookConfig.phoneFlipShortcutButton="Hide";bookConfig.BindingType="side";bookConfig.RightToLeft="No";bookConfig.FlipDirection="0";bookConfig.flippingTime="0.6";bookConfig.retainBookCenter="Yes";bookConfig.FlipStyle="Flip";bookConfig.autoDoublePage="Yes";bookConfig.isTheBookOpen="No";bookConfig.DoubleSinglePageButtonVisible="hide";bookConfig.thicknessWidthType="Thinner";bookConfig.thicknessColor="#ffffff";bookConfig.SingleModeBanFlipToLastPage="No";bookConfig.showThicknessOnMobile="No";bookConfig.isSingleBookFullWindowOnMobile="no";bookConfig.isStopMouseMenu="yes";bookConfig.restorePageVisible="No";bookConfig.topMargin="10";bookConfig.bottomMargin="10";bookConfig.leftMargin="10";bookConfig.rightMargin="10";bookConfig.hideMiniFullscreen="no";bookConfig.maxWidthToSmallMode="400";bookConfig.maxHeightToSmallMode="300";bookConfig.leftRightPnlShowOption="None";bookConfig.highDefinitionConversion="yes";bookConfig.LargeLogoPosition="top-left";bookConfig.LargeLogoTarget="Blank";bookConfig.isFixLogoSize="No";bookConfig.logoFixWidth="0";bookConfig.logoFixHeight="0";bookConfig.SupportOperatePageZoom="Yes";bookConfig.showHelpContentAtFirst="No";bookConfig.updateURLForPage="No";bookConfig.passwordTips="Please contact the <a href=mailto:author@sample.com><u>author</u></a> to access the web";bookConfig.OnlyOpenInIframe="No";bookConfig.OnlyOpenInIframeInfo="No reading rights";bookConfig.OpenWindow="Blank";bookConfig.showLinkHint="No";bookConfig.MidBgColor="#224389";bookConfig.useTheAliCloudChart ="no";bookConfig.totalPageCount=22;bookConfig.largePageWidth=1800;bookConfig.largePageHeight=1012;;bookConfig.securityType="1";bookConfig.CreatedTime ="230105131120";bookConfig.bookTitle="Regeneration Induction Presentation";bookConfig.bookmarkCR="41fb934d0007f4bfea50ffbef4274decb252d21b";bookConfig.productName="Flip PDF Professional";bookConfig.homePage="http://www.flipbuilder.com";bookConfig.searchPositionJS="mobile/javascript/text_position[1].js";bookConfig.searchTextJS="mobile/javascript/search_config.js";bookConfig.normalPath="files/mobile/";bookConfig.largePath="files/mobile/";bookConfig.thumbPath="files/thumb/";bookConfig.userListPath="files/extfiles/users.js";bookConfig.UIBaseURL='mobile/';var language = [];;function orgt(s){ return binl2hex(core_hx(str2binl(s), s.length * chrsz));};; var pageEditor = {"setting":{}, "pageAnnos":[[],[],[],[],[],[],[{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.044750","y":"0.320000","width":"0.303875","height":"0.024667"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/:b:/r/sites/RegenerationDivision/Shared%20Documents/Policies%20%26%20Company%20Standards/JFH%20Regeneration%20Policies/01%20Health%20Safety%20and%20Environmental%20Policy%20Rev%209%20July%202022.pdf?csf=1&web=1&e=pd5fej"}},{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.044750","y":"0.382222","width":"0.118250","height":"0.024667"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/:b:/r/sites/RegenerationDivision/Shared%20Documents/Policies%20%26%20Company%20Standards/JFH%20Regeneration%20Policy%20Statements/JFH%20Regeneration%20Quality%20Policy%20Statement%20August%202022.pdf?csf=1&web=1&e=07stCH"}},{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.044750","y":"0.444444","width":"0.138875","height":"0.024667"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/:b:/r/sites/RegenerationDivision/Shared%20Documents/Policies%20%26%20Company%20Standards/JFH%20Regeneration%20Policies/03.%20Company%20Work%20Safe%20Policy%20Nov%202022.pdf?csf=1&web=1&e=kOSfJi"}},{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.044750","y":"0.506667","width":"0.307500","height":"0.024667"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/:b:/r/sites/RegenerationDivision/Shared%20Documents/Policies%20%26%20Company%20Standards/JFH%20Regeneration%20Policies/13.%20Anti%20Bribery,Corruption%20%26%20Fraud%20Policy%20Aug%202022.pdf?csf=1&web=1&e=e5l48n"}},{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.044750","y":"0.568889","width":"0.210625","height":"0.024667"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/:b:/r/sites/RegenerationDivision/Shared%20Documents/Policies%20%26%20Company%20Standards/JFH%20Regeneration%20Policies/24.%20Modern%20Slavery%20Policy%20Feb%202022.pdf?csf=1&web=1&e=sc1GD9"}},{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.044750","y":"0.631111","width":"0.481875","height":"0.025111"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/:b:/r/sites/RegenerationDivision/Shared%20Documents/Policies%20%26%20Company%20Standards/JFH%20Regeneration%20Policies/16.%20Occupational%20Health%20Drugs%20%26%20Alcohol%20Management%20Policy%20Mar%202022.pdf?csf=1&web=1&e=M058em"}},{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.515875","y":"0.797333","width":"0.036750","height":"0.027333"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/:f:/r/sites/RegenerationDivision/Shared%20Documents/Policies%20%26%20Company%20Standards/JFH%20Regeneration%20Policies?csf=1&web=1&e=2hWl8u"}}],[],[{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.514375","y":"0.650444","width":"0.036750","height":"0.027333"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/:w:/r/sites/RegenerationDivision/Shared%20Documents/IMS%20Manual/JFH%20Regeneration%20IMS%20Manual%20Feb%202022.docx?d=w96b32d510e534ea79774eaff893f29b2&csf=1&web=1&e=SC4USv"}},{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.868375","y":"0.757111","width":"0.041375","height":"0.027333"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/:x:/r/sites/RegenerationDivision/Shared%20Documents/Accounts,%20Legal%20Registers,%20Insurances,%20Permits/Legal%20Compliance%20Register/Copy%20of%20Legal%20External%20%20Record%20Control%20Register%20-%20JFHR%2015.07.22%20-%20Revisions.xlsx?d=w93a423f868ef4030a149fdea87b09a95&csf=1&web=1&e=X0OVtG"}}],[],[],[{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.589750","y":"0.544667","width":"0.036750","height":"0.027333"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/:b:/r/sites/RegenerationDivision/Shared%20Documents/Procedures/Environmental%20-%20EMS/EMS011%20Environmental%20Aspects%20%20Impacts%20Register-%20Feb%2722%20Rev%205.pdf?csf=1&web=1&e=3mSsle"}}],[{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.759875","y":"0.562889","width":"0.036750","height":"0.027111"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/:b:/r/sites/RegenerationDivision/Shared%20Documents/Objectives,%20KPI%27s,%20Trend%20Analysis/Objectives%20and%20Targets%20-%202022.pdf?csf=1&web=1&e=x1WKfV"}}],[{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.434375","y":"0.871333","width":"0.036750","height":"0.027333"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/sites/RegenerationDivision/Shared%20Documents/Forms/AllItems.aspx?FolderCTID=0x0120004D1442D0A0BA2647A3C4E2866C768629&id=%2Fsites%2FRegenerationDivision%2FShared%20Documents%2FProcedures%2FHealth%20%26%20Safety%20%2D%20SMS%2FSMS003%20Accidents%20%26%20Incidents%20Reporting%20%20Investigation%20Procedure%20Rev%206%2Epdf&viewid=5a503c08%2D84c4%2D44f2%2D96ba%2Daf106bb3fc32&parent=%2Fsites%2FRegenerationDivision%2FShared%20Documents%2FProcedures%2FHealth%20%26%20Safety%20%2D%20SMS"}}],[{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.505125","y":"0.702889","width":"0.334750","height":"0.025111"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://live.1competencycloud.co.uk/login.htm"}}],[{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.487125","y":"0.845111","width":"0.036750","height":"0.027333"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/:b:/r/sites/RegenerationDivision/Shared%20Documents/Procedures/Health%20%26%20Safety%20-%20SMS/SMS005%20Fire%20%26%20Emergency%20Procedure.pdf?csf=1&web=1&e=Tkwn00"}}],[{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.887875","y":"0.574000","width":"0.036750","height":"0.027111"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/:b:/r/sites/RegenerationDivision/Shared%20Documents/Procedures/Health%20%26%20Safety%20-%20SMS/SMS004%20First%20Aid%20Procedure.pdf?csf=1&web=1&e=DFomYQ"}}],[{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.659250","y":"0.761333","width":"0.036750","height":"0.027333"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/:b:/r/sites/RegenerationDivision/Shared%20Documents/Policies%20%26%20Company%20Standards/Company%20Standards/Safety%20Standard%20No%2002%20Site%20Welfare%20Facilities.pdf?csf=1&web=1&e=YL0mzT"}}],[{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.551000","y":"0.809556","width":"0.036750","height":"0.027111"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/:b:/r/sites/RegenerationDivision/Shared%20Documents/Procedures/Health%20%26%20Safety%20-%20SMS/SMS009%20Personal%20Protective%20Equipment%20Procedure.pdf?csf=1&web=1&e=kgcm55"}}],[],[{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.517750","y":"0.446222","width":"0.340000","height":"0.025111"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://healthassuredeap.co.uk/log-in-page/"}},{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.740500","y":"0.570667","width":"0.032250","height":"0.024444"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/:w:/r/sites/RegenerationDivision/Shared%20Documents/Occupational%20Health/Employee%20Assistance%20Programme%20Leaflet.docx?d=w3eacc7d4adbf4facbf4783fb3a57b97b&csf=1&web=1&e=WPiGmf"}},{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.535750","y":"0.602000","width":"0.032250","height":"0.024444"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/sites/RegenerationDivision/Shared%20Documents/Forms/AllItems.aspx?FolderCTID=0x0120004D1442D0A0BA2647A3C4E2866C768629&id=%2Fsites%2FRegenerationDivision%2FShared%20Documents%2FEmployee%20Assistance%20Programme%20%28EAP%29%20Health%20Assured%2FEmployee%20FAQs%2Epdf&parent=%2Fsites%2FRegenerationDivision%2FShared%20Documents%2FEmployee%20Assistance%20Programme%20%28EAP%29%20Health%20Assured"}},{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.603375","y":"0.726444","width":"0.032250","height":"0.024444"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/:b:/r/sites/RegenerationDivision/Shared%20Documents/Procedures/Health%20%26%20Safety%20-%20SMS/SMS018%20Occupational%20Health%20Procedure%20Mar%2022%20Rev%204.pdf?csf=1&web=1&e=7nijn1"}},{"annotype":"com.mobiano.flipbook.pageeditor.TAnnoLink","location":{"x":"0.791000","y":"0.850889","width":"0.032250","height":"0.024444"},"action":{"triggerEventType":"mouseDown","actionType":"com.mobiano.flipbook.pageeditor.TAnnoActionOpenURL","url":"https://jfhgroup.sharepoint.com/:b:/r/sites/RegenerationDivision/Shared%20Documents/Employees%20Handbook/Employee%20Handbook.pdf?csf=1&web=1&e=9Jn4Ef"}}],[]]}; bookConfig.isFlipPdf=false; var pages_information =[{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{},{}];	
	if(language&&language.length>0&&language[0]&&language[0].language){
		bookConfig.language=language[0].language;
	}
	
try{
	for(var i=0;pageEditor!=undefined&&i<pageEditor.length;i++){
		if(pageEditor[i].length==0){
			continue;
		}
		for(var j=0;j<pageEditor[i].length;j++){
			var anno=pageEditor[i][j];
			if(anno==undefined)continue;
			if(anno.overAlpha==undefined){
				anno.overAlpha=bookConfig.LinkAlpha;
			}
			if(anno.outAlpha==undefined){
				anno.outAlpha=0;
			}
			if(anno.downAlpha==undefined){
				anno.downAlpha=bookConfig.LinkAlpha;
			}
			if(anno.overColor==undefined){
				anno.overColor=bookConfig.LinkDownColor;
			}
			if(anno.downColor==undefined){
				anno.downColor=bookConfig.LinkDownColor;
			}
			if(anno.outColor==undefined){
				anno.outColor=bookConfig.LinkDownColor;
			}
			if(anno.annotype=='com.mobiano.flipbook.pageeditor.TAnnoLink'){
				anno.alpha=bookConfig.LinkAlpha;
			}
		}
	}
}catch(e){
}
try{
	$.browser.device = 2;
}catch(ee){
}