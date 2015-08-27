jQuery(function($){

//==============================
//Product page form TC Inversion
//==============================
jQuery('.tc_page-form option').attr('disabled', 'disabled');
jQuery('.tc_page-form input[type="radio"]').on('click', function(e) {
		var output = jQuery('.tc_page-form input.radio:checked').attr('id');
		if (output == "flask-5") {
				jQuery('.tc_page-form option').removeAttr('disabled');
		}
		if (output == "flask-16") {
				jQuery('.tc_page-form option').removeAttr('disabled');
				jQuery('.tc_page-form option[value="qc14"]').attr('disabled', 'disabled');
		}
});

jQuery('.tc_page-form select#options').on('change', function(e) {
		var size = jQuery('.tc_page-form input[type="radio"]:checked').attr('id');
		var conn = jQuery('.tc_page-form option:selected').attr('value');
		var connText = jQuery('.tc_page-form option:selected').text();
		var part_no = "";
		var tc_desc = "";
		var stand_part_no = "";
		var stand_desc = "";

		//switch for 1.6L part #'s
		if (size == 'flask-16') {
				switch (conn) {
						case 'qc716': part_no = '931706';
								break;
						case 'll': part_no = '931710';
								break;
						case 'cf16': part_no = '931705';
								break;
						case 'cf24': part_no = '931708';
								break;
				}
				stand_part_no = "931609";
				stand_desc = "<b>Stand with Ring for Inverting Optimum Growth&trade; 1.6L Flask</b><br><i>to use w/1.6L Inversion Transfer Caps</i>";
		}
		//switch for 5L part #'s
		if (size == 'flask-5') {
				switch (conn) {
						case 'qc14': part_no = '931594';
								break;
						case 'qc716': part_no = '931596';
								break;
						case 'll': part_no = '931616';
								break;
						case 'cf16': part_no = '931595';
								break;
						case 'cf24': part_no = '931598';
								break;
				}
				stand_part_no = "931606";
				stand_desc = "<b>Stand with Ring for Inverting Optimum Growth&trade; 5 Liter Flask</b><br><i>to use w/5L Inversion Transfer Caps</i>";
		}

		//switch for descriptions
		switch (part_no) {
				case '931706': tc_desc = "<b>Inversion Transfer Cap for Optimum Growth&trade; 1.6L Flask</b><br><i>7/16&rdquo; Male Connection -- Sterile</i>";
						break;
				case '931705': tc_desc = "<b>Inversion Transfer Cap for Optimum Growth&trade; 1.6L Flask</b><br><i>2&rsquo; Tubing to weld to 1/4&rdquo; C-Flex 16 -- Sterile</i>";
						break;
				case '931708': tc_desc = "<b>Inversion Transfer Cap for Optimum Growth&trade; 1.6L Flask</b><br><i>2&rsquo; Tubing to weld to 7/16&rdquo; C-Flex 24 -- Sterile</i>";
						break;
				case '931710': tc_desc = "<b>Inversion Transfer Cap for Optimum Growth&trade; 1.6L Flask</b><br><i>with 2&rsquo; Tubing with Luer Lock -- Sterile</i>";
						break;
				case '931594': tc_desc = "<b>Inversion Transfer Cap for Optimum Growth&trade; 5 Liter Flask</b><br><i>1/4&rdquo; Barb Connection -- Sterile</i>";
						break;
				case '931596': tc_desc = "<b>Inversion Transfer Cap for Optimum Growth&trade; 5 Liter Flask</b><br><i>7/16&rdquo; Male Connection -- Sterile</i>";
						break;
				case '931595': tc_desc = "<b>Inversion Transfer Cap for Optimum Growth&trade; 5 Liter Flask</b><br><i>2&rsquo; Tubing to weld to 1/4&rdquo; C-Flex 16 -- Sterile</i>";
						break;
				case '931598': tc_desc = "<b>Inversion Transfer Cap for Optimum Growth&trade; 5 Liter Flask</b><br><i>2&rsquo; Tubing to weld to 7/16&rdquo; C-Flex 24 -- Sterile</i>";
						break;
				case '931616': tc_desc = "<b>Inversion Transfer Cap for Optimum Growth&trade; 5L Flask</b><br><i>with 2&rsquo; Tubing with Luer Lock -- Sterile</i>";
						break;
		}

		jQuery('.tc_page-form p.tc_part span.partNo').html(part_no);
		jQuery('.tc_page-form p.tc_part span.tc_desc').html(tc_desc);
		jQuery('.tc_page-form p.stand span.stand_part').html(stand_part_no);
		jQuery('.tc_page-form p.stand span.stand_description').html(stand_desc);
		jQuery('.tc_page-form .output').slideDown(350);

		e.preventDefault();
}); //END .on(change);

});