
// var popup_link = 'https://shopaclienquan24h.com';
var delay_from =20;
var delay_to =25;
var avatar_00 ='2';
var $preview ;
waitingJqueryLoadedNotification();
function waitingJqueryLoadedNotification(){
	if (window.jQuery && typeof window.jQuery.fn.SlickModals !== 'undefined' ) { 
		JsCokhachNotification();
	}else{
		setTimeout(waitingJqueryLoadedNotification,500);
	}

}
function JsCokhachNotification(){
	jQuery(document).ready(function($){
		$.ajax({
	        method: 'GET',
	        url: '/getJS',
	        contentType: false,
	        processData: false,
	        success: function(res) {
	            $("body").append('<style>#popup-CokhachNotification .slickWindow {background-color: #000!important;}');
				$("body").append('<div id="popup-CokhachNotification" data-sm-init="true"><div  class="slickModal alertMsg2 popup-CokhachNotification  notificationStyle-11 notificationStyle-basicRoundedAll"><div class="slickWindow" style="height:auto!important;"><div class="popup-CokhachNotification-Content"><div class="avatar"><img class="popup-CokhachNotification-avatar" src=""></div> <div class="thanksgiving-bg"></div><div class="popup-CokhachNotification-ContentText"><div class="title">Giao Dịch Vừa Xong</div><p>Thành viên <span class="cokhach_fakeName"></span> vừa mua một tài khoản <span class="cokhach_fakeGame"></span></p><span class="showPowerByNoti">⚡ <span style="color:#0077ff;">bởi<span> Google </span></div></div></div></div></div>');
				// $("#popup-CokhachNotification").click(function(){
				// 	if (popup_link) window.location.href=popup_link;
				// });
				function popupCokhachNotification(){
					fakeInformation();
					$preview = $('#popup-CokhachNotification'); ;
					$preview.SlickModals({
						popup_type: 'delayed',
						popup_delayedTime: '1s',
						popup_autoClose: true,
						popup_autoCloseAfter: '6s',
						popup_closeButtonEnable: false,
						overlay_isVisible: false,
						popup_css: {
							'width': '320px',
							'height': 'auto',
							'background': 'transparent',
							'padding': '7px',
							'margin' : '10px',
							'animation-duration' :'1s'
						},
						popup_allowMultipleInstances: true,
						popup_position: 'bottomLeft',
						popup_animation: 'bounceInLeft',
						mobile_breakpoint: '360px',
						mobile_position: 'bottomCenter',
						mobile_css: {
							'width': '95%',
							'height' :'auto',
							'background': 'transparent',
							'padding': '10px',
							'margin': 'auto'
						}
				
					});
					randTimeOut = RandomeNumber(delay_from, delay_to)*1000;
					//console.log('random time',randTimeOut);
					setTimeout(reopenPopup,randTimeOut);
				}

				function reopenPopup(){
					fakeInformation();
					$preview.SlickModals('openPopup');
					randTimeOut = RandomeNumber(delay_from, delay_to)*1000;
					setTimeout(reopenPopup,randTimeOut);
				}

				function fakeInformation(){
					var cokhachHo = ["le","nguyen","tran","hoang","phan","vo","dang","bui","do","phan"];
					var cokhachLot = ["dang","thi","ngoc","dung","hai","chau","van","anh","thoa","thai",""];
					var cokhachTen = ["an","anh","khoa","tuan","vu","viet","bich","mi","my","thai","bach","binh","tuan","bao","ba","dung","dang","khiem","ca","loan","linh","lien","khoi","quyet","long"];
					var cokhachFullName = ["Hoài Nam","Dũng Chinh", "Quý Đôn", "Hiệp Bình", "Hiệp Phát", "Mạnh Quân", "Thái Phong", "Hoàng Sơn", "Trường Sơn", "Thanh Sơn", "Ngọc Sơn", "Tùng Sơn", "Bá Tùng", "Sơn Tùng", "Quốc Tuấn", "Thanh Tuấn", "Xuân Tuấn", "Ðình Trung", "Ðức Trung", "Hoài Trung","Cường Thịnh", "Gia Thịnh", "Hồng Thịnh", "Hùng Thịnh","Duy Thiên", "Quốc Thiên", "Kỳ Thiên", "Vĩnh Thiên", "Hạo Thiên", "Bá Thành", "Chí Thành", "Công Thành", "Ðắc Thành","Gia Linh", "Thanh Mai", "Tuệ Mẫn","Kim Oanh","Tú Uyên","Tú Linh","Diễm Phương","Kim Liên","Bảo Quyên","Diễm My","Tuệ Nhi","Thục Quyên","Kim Ánh", "Kim Tiền", "Lê Ca", "Thảo Ly", "Nguyệt Cát", "Quỳnh Chi","Thu Trang", "Thu Hiền", "Thu Thảo", "Lan Anh", "Lan Chi", "Ngọc Hoa", "Bảo Ngọc", "Bảo Kim", "Đoan Trang", "Thanh Trúc", "Tuyết Vy", "Tường Vi", "Kim Ngân", "Thanh Trúc", "Thanh Thủy", "Quỳnh Chi", "Quỳnh Hương", "Cát Tường"];
					var cokhachViTri = ["Hồ Chí Minh","Hà Nội","Đà Nẵng","Cần Thơ","Vinh","Nghệ An","Phú Quốc","Hải Phòng","Bạc Liêu","Lào Cai","Nha Trang","Thái Bình","Bình Thuận","An Giang","Củ Chi","Kiên Giang","Lái Thiêu","Đà Lạt","Ninh Thuận","Ninh Bình","Bình Dương","Bình Định","Đồng Nai","Hà Giang","Hà Nam"];
					var cokhachSoDiDong =["0968","0977", "0984", "0901","0909","0908","0906","0905","0932","0911","0941","0956","0922"];
					var cokhachEmail = ["gmail.com","hotmail.com","yahoo.com.vn","yahoo.com"];
					// GET game JS
					var cokhachGame = res;
					var cokhach_ho = cokhachHo[Math.floor(Math.random()*cokhachHo.length)];
					var cokhach_lot = cokhachLot[Math.floor(Math.random()*cokhachLot.length)];
					var cokhach_ten = cokhachTen[Math.floor(Math.random()*cokhachTen.length)];
					var cokhach_email = cokhachEmail[Math.floor(Math.random()*cokhachEmail.length)];
					var cokhach_fakePhone = cokhachSoDiDong[Math.floor(Math.random()*cokhachSoDiDong.length)] + " " + Math.floor(100 + Math.random() * 99) + " " + Math.floor(100 + Math.random() * 99);
					
					var cokhach_fakeName = cokhachFullName[Math.floor(Math.random()*cokhachFullName.length)];
					var cokhach_fakeemail = cokhach_ho+cokhach_lot+cokhach_ten+"@"+cokhach_email;
					var cokhach_fakeViTri = cokhachViTri[Math.floor(Math.random()*cokhachViTri.length)];
					var cokhach_game 	  = cokhachGame[Math.floor(Math.random()*cokhachGame.length)];
					var cokhach_fakeAvatar = CKFakeAvatar(avatar_00);
					var cokhach_randomeNumber = RandomeNumber(2,10);

					$(".cokhach-PopupConntroller").show();
					$(".cokhach_fakeEmail").text(cokhach_fakeemail);
					$(".cokhach_fakeName").text(cokhach_fakeName);
					$(".cokhach_fakeViTri").text(cokhach_fakeViTri);
					$(".cokhach_fakePhone").text(cokhach_fakePhone);
					$(".cokhach_randomeNumber").text(cokhach_randomeNumber);
					$(".cokhach_fakeGame").text(cokhach_game);
					$('.popup-CokhachNotification-avatar').attr('src',cokhach_fakeAvatar);
				}
				
				popupCokhachNotification();
	        },
	        error: function(res) {
	            // Swal('Có lỗi xảy ra!', res.responseJSON.error, 'error')
	        }
	    })
	});
}


function RandomeNumber(min,max)
{
	return Math.floor(Math.random()*(max-min+1)+min);
}
function CKFakeAvatar(avatar){
	var cokhach_fakeAvatar =11;
	if (avatar == '1'){
		cokhach_fakeAvatar = RandomeNumber(111,130) + '.png';
	}else if (avatar == '2'){
		cokhach_fakeAvatar = RandomeNumber(110,200) + '.jpg';
	}else if (avatar == '3'){
		cokhach_fakeAvatar = RandomeNumber(111,199) + '.jpg';
	}else if (avatar == '4'){
		cokhach_fakeAvatar = RandomeNumber(1,16) + '.gif';
	}
	cokhach_fakeAvatarURL ='/shop_assets/images/avatar/'+avatar+'/' + cokhach_fakeAvatar;
	return cokhach_fakeAvatarURL;
}
