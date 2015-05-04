$(document).ready(function(){

	$(".hide").hide();
		// run the currently selected effect
		function runEffect() {
			// get effect type from
			var selectedEffect = $( "#effectTypes" ).val();

			// most effect types need no options passed by default
			var options = {};
			// some effects have required parameters
			if ( selectedEffect === "scale" ) {
				options = { percent: 0 };
			} else if ( selectedEffect === "size" ) {
				options = { to: { width: 200, height: 60 } };
			}

			// run the effect
			$( "#effect" ).toggle( selectedEffect, options, 500 );
		};

		function runEffect2() {
			// get effect type from
			var selectedEffect = $( "#effectTypes" ).val();

			// most effect types need no options passed by default
			var options = {};
			// some effects have required parameters
			if ( selectedEffect === "scale" ) {
				options = { percent: 0 };
			} else if ( selectedEffect === "size" ) {
				options = { to: { width: 200, height: 60 } };
			}

			// run the effect
			$( "#effect2" ).toggle( selectedEffect, options, 500 );
		};

		function runEffect3() {
			// get effect type from
			var selectedEffect = $( "#effectTypes" ).val();

			// most effect types need no options passed by default
			var options = {};
			// some effects have required parameters
			if ( selectedEffect === "scale" ) {
				options = { percent: 0 };
			} else if ( selectedEffect === "size" ) {
				options = { to: { width: 200, height: 60 } };
			}

			// run the effect
			$( "#effect3" ).toggle( selectedEffect, options, 500 );
		};


		function runEffect4() {
			// get effect type from
			var selectedEffect = $( "#effectTypes" ).val();

			// most effect types need no options passed by default
			var options = {};
			// some effects have required parameters
			if ( selectedEffect === "scale" ) {
				options = { percent: 0 };
			} else if ( selectedEffect === "size" ) {
				options = { to: { width: 200, height: 60 } };
			}

			// run the effect
			$( "#effect4" ).toggle( selectedEffect, options, 500 );
		};

		function runEffect5() {
			// get effect type from
			var selectedEffect = $( "#effectTypes" ).val();

			// most effect types need no options passed by default
			var options = {};
			// some effects have required parameters
			if ( selectedEffect === "scale" ) {
				options = { percent: 0 };
			} else if ( selectedEffect === "size" ) {
				options = { to: { width: 200, height: 60 } };
			}

			// run the effect
			$( "#effect5" ).toggle( selectedEffect, options, 500 );
		};

		function runEffect6() {
			// get effect type from
			var selectedEffect = $( "#effectTypes" ).val();

			// most effect types need no options passed by default
			var options = {};
			// some effects have required parameters
			if ( selectedEffect === "scale" ) {
				options = { percent: 0 };
			} else if ( selectedEffect === "size" ) {
				options = { to: { width: 200, height: 60 } };
			}

			// run the effect
			$( "#effect6" ).toggle( selectedEffect, options, 500 );
		};

		// set effect from select menu value
		$( "#button" ).click(function() {
			$("#effect2").hide();
			$("#effect3").hide();
			$("#effect4").hide();
			$("#effect5").hide();
			$("#effect6").hide();
			runEffect();
			return false;
		});

		$( "#button2" ).click(function() {
			$("#effect").hide();
			$("#effect3").hide();
			$("#effect4").hide();
			$("#effect5").hide();
			$("#effect6").hide();
			runEffect2();
			return false;
		});

		$( "#button3" ).click(function() {
			$("#effect").hide();
			$("#effect2").hide();
			$("#effect4").hide();
			$("#effect5").hide();
			$("#effect6").hide();
			runEffect3();
			return false;
		});

		$( "#button4" ).click(function() {
			$("#effect").hide();
			$("#effect2").hide();
			$("#effect3").hide();
			$("#effect5").hide();
			$("#effect6").hide();
			runEffect4();
			return false;
		});

		$( "#button5" ).click(function() {
			$("#effect").hide();
			$("#effect2").hide();
			$("#effect3").hide();
			$("#effect4").hide();
			$("#effect6").hide();
			runEffect5();
			return false;
		});

		$( "#button6" ).click(function() {
			$("#effect").hide();
			$("#effect2").hide();
			$("#effect3").hide();
			$("#effect4").hide();
			$("#effect5").hide();
			runEffect6();
			return false;
		});
});