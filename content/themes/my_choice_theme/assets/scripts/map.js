// jshint ignore: start
$(function(){
	$(".mapcontainer").mapael({
		map : {
            // Set the name of the map to display
			name : "southern_wisconsin",
            width:225,
            defaultArea : {
            attrs : {
                stroke: "#FFF"
            },
            attrsHover : {
                fill: " "
            },
            tooltip: {
              css: {
                'max-width':'260px',
               'opacity': '.9'
              }
            }
        }
		},
        areas : {
            "rect3" : {
                attrs : {
                    fill: "#e0f5fc",
                    stroke: "#FFF"
                },
                attrsHover : {
                    fill: "#bef0ff"
                }
            },
            "Sheboygan" : {
                tooltip : {
                    content : "Sheboygan Resource Center<br/>ADRC of Sheboygan County
<br/>650 Forest Avenue<br/>Sheboygan Falls, WI<br/><b>Phone: 1-800-596-1919</b><br/>
<b>TTY/TDD/Relay: (920) 467-4195</b>"
                },
                attrs: {
                    fill: "#85b757"
                },
                attrsHover : {
                    fill: "#a8cc87"
                },
								href: '/sheboygan-county-resource-center'
            },
            "SheboyganText" : {
                tooltip : {
                    content : "Sheboygan Resource Center<br/>ADRC of Sheboygan County
<br/>650 Forest Avenue<br/>Sheboygan Falls, WI<br/><b>Phone: 1-800-596-1919</b><br/>
<b>TTY/TDD/Relay: (920) 467-4195</b>"
                },
                attrs: {
                    fill : "#FFF",
                    stroke : "#FFF"
                },
                attrsHover: {
                    fill : "#FFF",
                    stroke : "#FFF"
                },
								href: '/sheboygan-county-resource-center'
            },
            "Milwaukee" : {
              tooltip : {
                    content : "Milwaukee County Resource Center<br/>Please Click to find the resource center for you"
                },
                attrs: {
                    fill: "#0071b5"
                },
                attrsHover : {
                    fill: "#538BC4"
                },
								href: '/milwaukee-county'
            },
            "MilwaukeeText" : {
              tooltip : {
                    content : "Milwaukee County Resource Center<br/>Click here to find the resource center for you"},
                attrs: {
                    fill : "#FFF",
                    stroke : "#FFF"
                },
              attrsHover: {
                    fill : "#FFF",
                    stroke : "#FFF"
                },
								href: '/milwaukee-county'
            },
            "Kenosha" : {
               tooltip : {
                    content : "Kenosha County  <br/>ADRC of Kenosha County
<br/>8600 Sheridan Road, Suite 500<br/>Kenosha, WI  53143 <br/><b>Phone: 1-800-472-8008</b><br/>
<b>TTY/TDD/Relay: WI Relay 711</b>"
                },
                attrs: {
                    fill: "#dd1e47"
                },
                attrsHover : {
                    fill: "#ef5564"
                },
								href: '/kenosha-county-resource-center'
            },
            "KenoshaText" : {
              tooltip : {
                    content : "Kenosha County  <br/>ADRC of Kenosha County
<br/>8600 Sheridan Road, Suite 500<br/>Kenosha, WI  53143 <br/><b>Phone: 1-800-472-8008</b><br/>
<b>TTY/TDD/Relay: WI Relay 711</b>"
                },
                attrs: {
                    fill : "#FFF",
                    stroke : "#FFF"
                },
              attrsHover: {
                    fill : "#FFF",
                    stroke : "#FFF"
                },
								href:'/kenosha-county-resource-center'
            },
            "Racine" : {
              tooltip : {
                    content : "Racine County<br/>ADRC of Racine County
<br/>14200 Washington Avenue<br/>Sturtevant, WI  53177 <br/><b>Phone: Toll free: 1-866-219-1043</b><br/>
<b>TTY/TDD/Relay: WI Relay 711</b>"
                },
                attrs: {
                    fill: "#76b83f"
                },
                attrsHover : {
                    fill: "#98ca63"
                },
								href:'/racine-county-resource-center'
            },
            "RacineText" : {
              tooltip : {
                    content : "Racine County<br/>ADRC of Racine County
<br/>14200 Washington Avenue<br/>Sturtevant, WI  53177 <br/><b>Phone: Toll free: 1-866-219-1043</b><br/>
<b>TTY/TDD/Relay: WI Relay 711</b>"
                },
                attrs: {
                    fill : "#FFF",
                    stroke : "#FFF"
                },
              attrsHover: {
                    fill : "#FFF",
                    stroke : "#FFF"
                },
								href: '/racine-county-resource-center'
            },
            "Ozaukee" : {
								tooltip : {
										content : "Ozaukee County
										<br/>ADRC of Ozaukee County
<br/>
121 W. Main Street
<br/>
Port Washington, WI  53074
<br/>
<b>Toll free:</b> 1-866-537-4261
<b>TTY/TDD/Relay:</b> WI Relay 711"
								},
                attrs: {
                    fill: "#006a5a"
                },
                attrsHover : {
                    fill: "#008d70"
                },
								href: '/ozaukee-county-resource-center'
            },
            "OzaukeeText" : {
							tooltip : {
									content : "Ozaukee County
									<br/>
ADRC of Ozaukee County
<br/>
121 W. Main Street
<br/>
Port Washington, WI  53074
<br/>
<b>Toll free:</b> 1-866-537-4261
<b>TTY/TDD/Relay:</b> WI Relay 711"
							},
                attrs: {
                    fill : "#FFF",
                    stroke : "#FFF"
                },
								attrsHover: {
	                    fill : "#FFF",
	                    stroke : "#FFF"
	                },
									href: '/ozaukee-county-resource-center'
            },
            "Washington" : {
							tooltip: {
								content:
									'Washington County
<br/>
ADRC of Washington County
<br/>
333 E. Washington Street, Suite 1000
<br/>
West Bend, WI  53095
<br/>
<b>Toll free:</b> 1-877-306-3030'

							},
                attrs: {
                    fill: "#a2228e"
                },
                attrsHover : {
                    fill: "#cb1f90"
                },
								href:'/washington-county-resource-center'
            },
            "WashingtonText" : {
							tooltip: {
								content:
									'Washington County
<br/>
ADRC of Washington County
<br/>
333 E. Washington Street, Suite 1000
<br/>
West Bend, WI  53095
<br/>
<b>Toll free:</b> 1-877-306-3030'

							},
                attrs: {
                    fill : "#FFF",
                    stroke : "#FFF"
                },
								attrsHover: {
	                    fill : "#FFF",
	                    stroke : "#FFF"
	                },
								href: '/washington-county-resource-center'
            },
            "Walworth" : {
								tooltip: {
									content:
									'Walworth County
<br/>
ADRC of Walworth County
<br/>
W4051 County Road NN
<br/>
P.O. Box 1005
<br/>
Elkhorn, WI  53121-1005
<br/>
<b>Toll free:</b> 1-800-365-1587
<br/>
<b>TTY/TDD/Relay:</b> 262-741-3255'

								},
                attrs : {
                     fill: "#2BC4F3"

                },
                attrsHover : {
                    fill: "#71ddff"
                },
								href:'/walworth-county-resource-center'

            },
            "WalworthText" : {
							tooltip: {
								content:
								'Walworth County
<br/>
ADRC of Walworth County
<br/>
W4051 County Road NN
<br/>
P.O. Box 1005
<br/>
Elkhorn, WI  53121-1005
<br/>
<b>Toll free:</b> 1-800-365-1587
<br/>
<b>TTY/TDD/Relay:</b> 262-741-3255'

							},
                attrs: {
                    fill : "#FFF",
                    stroke : "#FFF"
                },
								attrsHover: {
	                    fill : "#FFF",
	                    stroke : "#FFF"
	                },
								href: '/walworth-county-resource-center'
            },
            "Waukeesha" : {
							tooltip : {
								content :
								'Waukesha County
<br/>
ADRC of Waukesha County
<br/>
500 Riverview Avenue
<br/>
Waukesha, WI  53188
<br/>
<b>Toll free:</b> 1-866-677-2372
<br/>
<b>TTY/TDD/Relay:</b> WI Relay 711'

							},
                attrs : {
                    fill : "#FAAC18"
                },
                attrsHover : {
                    fill : "#FFCA05"
                },
								href: '/waukesha-county-resource-center'
            },
            "WaukeshaText" : {
							tooltip : {
								content :
								'Waukesha County
<br/>
ADRC of Waukesha County
<br/>
500 Riverview Avenue
<br/>
Waukesha, WI  53188
<br/>
<b>Toll free:</b> 1-866-677-2372
<br/>
<b>TTY/TDD/Relay:</b> WI Relay 711'

							},
                attrs : {
                    fill : "#FFFFFF",
                    stroke : "#FFFFFF"
                },
								attrsHover: {
	                    fill : "#FFF",
	                    stroke : "#FFF"
	                },
									href: '/waukesha-county-resource-center'
            }
        }
	});
});
// jshint ignore: end
