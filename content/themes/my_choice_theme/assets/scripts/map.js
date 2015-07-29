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
<br/>650 Forest Avenue<br/>Sheboygan Falls, WI<br/><b>Phone: (800) 596-1919</b><br/>
<b>TTY/TDD/Relay: (920)467-4195</b>"
                },
                attrs: {
                    fill: "#85b757"
                },
                attrsHover : {
                    fill: "#a8cc87"
                }
            },
            "SheboyganText" : {
                tooltip : {
                    content : "Sheboygan Resource Center<br/>ADRC of Sheboygan County
<br/>650 Forest Avenue<br/>Sheboygan Falls, WI<br/><b>Phone: (800) 596-1919</b><br/>
<b>TTY/TDD/Relay: (920)467-4195</b>"
                },
                attrs: {
                    fill : "#FFF",
                    stroke : "#FFF"
                },
                attrsHover: {
                    fill : "#FFF",
                    stroke : "#FFF"
                }
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
                }
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
                }
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
                }
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
                }
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
                }
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
                }
            },
            "Ozaukee" : {
                attrs: {
                    fill: "#006a5a"
                },
                attrsHover : {
                    fill: "#008d70"
                }
            },
            "OzaukeeText" : {
                attrs: {
                    fill : "#FFF",
                    stroke : "#FFF"
                }
            },
            "Washington" : {
                attrs: {
                    fill: "#a2228e"
                },
                attrsHover : {
                    fill: "#cb1f90"
                }
            },
            "WashingtonText" : {
                attrs: {
                    fill : "#FFF",
                    stroke : "#FFF"
                }
            },
            "Walworth" : {
                attrs : {
                     fill: "#2BC4F3"

                },
                attrsHover : {
                    fill: "#71ddff"
                }

            },
            "WalworthText" : {
                attrs: {
                    fill : "#FFF",
                    stroke : "#FFF"
                }
            },
            "Waukeesha" : {
                attrs : {
                    fill : "#FAAC18"
                },
                attrsHover : {
                    fill : "#FFCA05"
                }
            },
            "WaukeshaText" : {
                attrs : {
                    fill : "#FFFFFF",
                    stroke : "#FFFFFF"
                }
            }
        }
	});
});
// jshint ignore: end
