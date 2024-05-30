let app = new Vue({
    el: '#app',
    data: {
        dims: {
            width: 360,
            height: 640
        },
        device: 'galaxys9',
        disabled: true,
        zoom: 100,
        rotate: true
    },
    methods: {
        changeModel() {

            if (this.device == 'responsive') {

                this.disabled = false;
            
            }

            else {

                this.disabled = true;

                if (this.device == 'galaxys9') {
                    this.dims.width = 360;
                    this.dims.height = 640;
                }
                if (this.device == 'iphone678') {
                    this.dims.width = 375;
                    this.dims.height = 667;
                }
                if (this.device == 'pixel2') {
                    this.dims.width = 411;
                    this.dims.height = 731;
                }
                if (this.device == "galaxyfold") {
                    this.dims.width = 585;
                    this.dims.height = 668;
                }
                if (this.device == "iphone678plus") {
                    this.dims.width = 414;
                    this.dims.height = 736;
                } 
                if (this.device == "galaxys8plus") {
                    this.dims.width = 360;
                    this.dims.height = 740;
                }
                if (this.device == "iphonexsmax") {
                    this.dims.width = 414;
                    this.dims.height = 896;
                }
                if (this.device == "pixel3xl") {
                    this.dims.width = 411;
                    this.dims.height = 823;
                }
                if (this.device == "galaxys8") {
                    this.dims.width = 360;
                    this.dims.height = 740;
                }
                if (this.device == "galaxynote9") {
                    this.dims.width = 414;
                    this.dims.height = 846;
                }
                if (this.device == "iphonex") {
                    this.dims.width = 375;
                    this.dims.height = 812;
                }
                if (this.device == "ipad") {
                    this.dims.width = 768;
                    this.dims.height = 1024;
                }
                if (this.device == "ipadpro") {
                    this.dims.width = 1024;
                    this.dims.height = 1366;
                }
                if (this.device == "iphone5se") {
                    this.dims.width = 320;
                    this.dims.height = 568;
                }
                if (this.device == "galaxys5") {
                    this.dims.width = 360;
                    this.dims.height = 640;
                }
            }
        }
    }
});

window.onload = function() {
    let myiFrame = document.getElementById("mobilook-iframe");
    let doc = myiFrame.contentDocument;
    doc.head.innerHTML = doc.head.innerHTML + `<style type="text/css"> ::-webkit-scrollbar { width:4px } ::-webkit-scrollbar-track { background:#f1f1f1 } ::-webkit-scrollbar-thumb { background:#bbb } ::-webkit-scrollbar-thumb:hover { ackground:#aaa } #wpadminbar { display:none } html { margin-top:0px!important } </style>`;
}

jQuery(document).ready(function () {

    jQuery("#fs_connect button[type=submit]").on("click", function(e) {
        console.log("open verify window")
        window.open('https://better-robots.com/subscribe.php?plugin=mobilook','mobilook','resizable,height=400,width=700');
    });

});

// jQuery(document).ready(function () {

//     jQuery('.mobilook-alert').on('click', '.closebtn', function () {
//         jQuery(this).closest('.mobilook-alert').fadeOut(); //.css('display', 'none');
//     });
    
//     jQuery('.mobilook-models').on('change', function() {
//         var x = this.value;

//         if (x == "galaxys9") {
            
//             var mobilook_wh = ["360", "740"];
//             jQuery('iframe.mobilook-iframe').width(360).height(740);
//             jQuery('.mobilook-width').text(mobilook_wh[0]);
//             jQuery('.mobilook-height').text(mobilook_wh[1]);

//          }
      
//         if (x == "iphone678") {
            
//             var mobilook_wh = ["375", "667"];
//             jQuery('iframe.mobilook-iframe').width(mobilook_wh[0]).height(mobilook_wh[1]);
//             jQuery('.mobilook-width').text(mobilook_wh[0]);
//             jQuery('.mobilook-height').text(mobilook_wh[1]);

//         } 
         
//          if (x == "pixel2") {

//             var mobilook_wh = ["411", "731"];
//             jQuery('iframe.mobilook-iframe').width(mobilook_wh[0]).height(mobilook_wh[1]);
//             jQuery('.mobilook-width').text(mobilook_wh[0]);
//             jQuery('.mobilook-height').text(mobilook_wh[1]);

//         }
        
//         if (x == "galaxyfold") {
            
//             var mobilook_wh = ["585", "668"];
//             jQuery('iframe.mobilook-iframe').width(mobilook_wh[0]).height(mobilook_wh[1]);
//             jQuery('.mobilook-width').text(mobilook_wh[0]);
//             jQuery('.mobilook-height').text(mobilook_wh[1]);

//         }

        
//         if (x == "iphone678plus") {
            
//             var mobilook_wh = ["414", "736"];
//             jQuery('iframe.mobilook-iframe').width(mobilook_wh[0]).height(mobilook_wh[1]);
//             jQuery('.mobilook-width').text(mobilook_wh[0]);
//             jQuery('.mobilook-height').text(mobilook_wh[1]);

//         } 
        
//         if (x == "galaxys8plus") {
            
//             var mobilook_wh = ["360", "740"];
//             jQuery('iframe.mobilook-iframe').width(mobilook_wh[0]).height(mobilook_wh[1]);
//             jQuery('.mobilook-width').text(mobilook_wh[0]);
//             jQuery('.mobilook-height').text(mobilook_wh[1]);

//         }

//         if (x == "iphonexsmax") {
            
//             var mobilook_wh = ["414", "896"];
//             jQuery('iframe.mobilook-iframe').width(mobilook_wh[0]).height(mobilook_wh[1]);
//             jQuery('.mobilook-width').text(mobilook_wh[0]);
//             jQuery('.mobilook-height').text(mobilook_wh[1]);

//         }

//         if (x == "pixel3xl") {
            
//             var mobilook_wh = ["411", "823"];
//             jQuery('iframe.mobilook-iframe').width(mobilook_wh[0]).height(mobilook_wh[1]);
//             jQuery('.mobilook-width').text(mobilook_wh[0]);
//             jQuery('.mobilook-height').text(mobilook_wh[1]);

//         }

//         if (x == "galaxys8") {
            
//             var mobilook_wh = ["360", "740"];
//             jQuery('iframe.mobilook-iframe').width(mobilook_wh[0]).height(mobilook_wh[1]);
//             jQuery('.mobilook-width').text(mobilook_wh[0]);
//             jQuery('.mobilook-height').text(mobilook_wh[1]);

//         }

//         if (x == "galaxynote9") {
            
//             var mobilook_wh = ["414", "846"];
//             jQuery('iframe.mobilook-iframe').width(mobilook_wh[0]).height(mobilook_wh[1]);
//             jQuery('.mobilook-width').text(mobilook_wh[0]);
//             jQuery('.mobilook-height').text(mobilook_wh[1]);

//         }

//         if (x == "iphonex") {
            
//             var mobilook_wh = ["375", "812"];
//             jQuery('iframe.mobilook-iframe').width(mobilook_wh[0]).height(mobilook_wh[1]);
//             jQuery('.mobilook-width').text(mobilook_wh[0]);
//             jQuery('.mobilook-height').text(mobilook_wh[1]);

//         }

//         if (x == "ipad") {
            
//             var mobilook_wh = ["768", "1024"];
//             jQuery('iframe.mobilook-iframe').width(mobilook_wh[0]).height(mobilook_wh[1]);
//             jQuery('.mobilook-width').text(mobilook_wh[0]);
//             jQuery('.mobilook-height').text(mobilook_wh[1]);

//         }

//         if (x == "ipadpro") {
            
//             var mobilook_wh = ["1024", "1366"];
//             jQuery('iframe.mobilook-iframe').width(mobilook_wh[0]).height(mobilook_wh[1]);
//             jQuery('.mobilook-width').text(mobilook_wh[0]);
//             jQuery('.mobilook-height').text(mobilook_wh[1]);

//         }

//         if (x == "iphone5se") {
            
//             var mobilook_wh = ["320", "568"];
//             jQuery('iframe.mobilook-iframe').width(mobilook_wh[0]).height(mobilook_wh[1]);
//             jQuery('.mobilook-width').text(mobilook_wh[0]);
//             jQuery('.mobilook-height').text(mobilook_wh[1]);

//         }

//         if (x == "galaxys5") {
            
//             var mobilook_wh = ["360", "640"];
//             jQuery('iframe.mobilook-iframe').width(mobilook_wh[0]).height(mobilook_wh[1]);
//             jQuery('.mobilook-width').text(mobilook_wh[0]);
//             jQuery('.mobilook-height').text(mobilook_wh[1]);

//         }
//     });


//     var mobilook_wh = ["360", "640"];
//     jQuery('.mobilook-width').text(mobilook_wh[0]);
//     jQuery('.mobilook-height').text(mobilook_wh[1]);
    
// });