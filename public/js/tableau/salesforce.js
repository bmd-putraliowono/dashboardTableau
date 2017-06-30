var vizEsSg;

function initEsSg(){
    var containerEsSg = document.getElementById("esSgContainer");
    var urlEsSg = "https://10az.online.tableau.com/t/bmdbi/views/ExecutiveSalesforce/SalesGrowth?:embed=y&:showAppBanner=false&:showShareOptions=true&:display_count=no&:showVizHome=no&:refresh=yes";
    var optionEsSg = {
        hideTabs: true,
        // hideToolbar: true
        width: '100%',
        height: '1025px'
    };
    vizEsSg = new tableau.Viz(containerEsSg, urlEsSg, optionEsSg);
}