jQuery(document).ready(function(){	

	jQuery('.option input[type=radio]:checked').parents('.option').addClass('selected');
	
	jQuery('.option').click(function(){
		var whichoption = jQuery(this).parent('.group');
		jQuery(this).parents('.group').children('.option').removeClass('selected');
		jQuery(this).addClass('selected');
		jQuery(this).children('input[type="radio"]').attr('checked', 'checked');
	});
	
	var currentBGcolor = jQuery('#apfy_backgroundColor').val();
	var currentHeaderColor = jQuery('#apfy_headerColor').val();
	var currentLinkColor = jQuery('#apfy_linkColor').val();	
	
	jQuery('#apfy_backgroundColor-preview').css('background',currentBGcolor);
	jQuery('#apfy_headerColor-preview').css('background',currentHeaderColor);
  jQuery('#apfy_linkColor-preview').css('background',currentLinkColor);

	// background color
	jQuery('#apfy_backgroundColor').ColorPicker({
		color: currentBGcolor,
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			  jQuery('.group.texture .option img').css('backgroundColor', '#' + hex);
			  jQuery('#apfy_backgroundColor').val('#' + hex);
			  jQuery('#apfy_backgroundColor-preview').css('background','#' + hex);
		}
		
	});
	
	jQuery('#apfy_headerColor').ColorPicker({
		color: currentHeaderColor,
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			  jQuery('#apfy_headerColor').val('#' + hex);
			  jQuery('#apfy_headerColor-preview').css('background','#' + hex);
		}
		
	});
	
	jQuery('#apfy_linkColor').ColorPicker({
		color: currentLinkColor,
		onShow: function (colpkr) {
			jQuery(colpkr).fadeIn(500);
			return false;
		},
		onHide: function (colpkr) {
			jQuery(colpkr).fadeOut(500);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			  jQuery('#apfy_linkColor').val('#' + hex);
			  jQuery('#apfy_linkColor-preview').css('background','#' + hex);
		}
		
	});
	
	
	jQuery('.group.texture .option img').css('backgroundColor', currentBGcolor);
	
	var uploadID = '';

	// upload image button
	jQuery('#upload_image_button').click(function() {
	 uploadID = jQuery(this).prev('input');
	 formfield = jQuery('#apfy_app_icon').attr('name');
	 tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
	 return false;
	});
	
	// upload image button
	jQuery('#upload_bgimage_button').click(function() {
	 uploadID = jQuery(this).prev('input');
	 formfield = jQuery('#apfy_backgroundImage').attr('name');
	 tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
	 return false;
	});
	
	window.send_to_editor = function(html) {
	 imgurl = jQuery('img',html).attr('src');
	 //jQuery('#apfy_app_icon').val(imgurl);
	 uploadID.val(imgurl);
	 tb_remove();
	 updateiconthumb();
	 updatelogothumb();
	 updatebgthumb();
	}
	
	
	updateiconthumb();
	
	
	// feature type
	
	jQuery('.featureType.group').each(function(){
	  var featureType = jQuery('input[type=radio]:checked',this).attr('id');
	  if (featureType == 'Slideshow'){
	    jQuery(this).parent().parent().nextAll('.slideshowOptions').show();
	    jQuery(this).parent().parent().nextAll('.videoID').hide();
	  } else {
	    jQuery(this).parent().parent().nextAll('.slideshowOptions').hide();
	    jQuery(this).parent().parent().nextAll('.videoID').show();
	  }
	});
	
	jQuery('.featureType.group').click(function(){
	  var featureTypeclicked = jQuery('input[type=radio]:checked',this).attr('id');
	  if (featureTypeclicked == 'Slideshow'){
	    jQuery(this).parent().parent().nextAll('.slideshowOptions').show();
	    jQuery(this).parent().parent().nextAll('.videoID').hide();
	  } else {
	    jQuery(this).parent().parent().nextAll('.slideshowOptions').hide();
	    jQuery(this).parent().parent().nextAll('.videoID').show();
	  }
	});
	
		
	function updateiconthumb() {
		var appiconpath = jQuery('#apfy_app_icon').val();
		if (appiconpath != '') {
			jQuery('.appicon').css({'width' : '80px', 'height' : '80px', 'margin-bottom' : '12px' , 'background-image' : 'url('+appiconpath+')'});
		}
	}
	
	
	
	// upload logo button
	
	jQuery('#upload_logo_button').click(function() {
	 uploadID = jQuery(this).prev('input');
	 logoformfield = jQuery('#apfy_app_logo').attr('name');
	 tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
	 return false;
	});
	
	
	
	updatelogothumb();
	updatebgthumb()
	
	function updatelogothumb() {
		var applogopath = jQuery('#apfy_app_logo').val();
		if (applogopath != '') {
		  jQuery('.applogo').html('<img src="'+applogopath+'" style="max-width:380px; max-height:200px;"/>');
		}
	}
	
	function updatebgthumb() {
		var appbgpath = jQuery('#apfy_backgroundImage').val();
		if (appbgpath != '') {
		  jQuery('.backgroundImage').html('<img src="'+appbgpath+'" style="max-width:380px; max-height:200px;"/>');
		}
	}
	
	
	jQuery('.platform input[type=checkbox]:checked').closest('tr').addClass('selected').next().next('tr').show();
	
	jQuery('.platform input[type=checkbox]').click(function(){
		jQuery(this).closest('tr').toggleClass('selected').next().next().fadeToggle();
		getselectedplatforms();
		jQuery('.defaultcheckbox').removeAttr('checked');
	});
	
	
	// get number of selected templates
	getselectedplatforms();
	function getselectedplatforms() {
		var selectedplatforms = jQuery(".platform input[type=checkbox]:checked").length;
		if (selectedplatforms >= 2) {
			jQuery('.defaultcheckboxrow').show();
		} else {
			jQuery('.defaultcheckboxrow').hide();
		}
	}
	
	jQuery('.defaultcheckbox').click(function(){
		jQuery('.defaultcheckbox').not(this).removeAttr('checked');
	});
	
});