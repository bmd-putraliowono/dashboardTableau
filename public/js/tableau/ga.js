/*window.onload = function(){
    var containerGa = document.getElementById("gaContainer");
    var urlGa = "https://10az.online.tableau.com/t/bmdbi/views/GoogleAnalytics/OverallTrends?:embed=y&:showAppBanner=false&:showShareOptions=true&:display_count=no&:showVizHome=no";
    // var optionGa = {
    //     hideTabs: true,
    //     hideToolbar: true
    // };
    var vizGa = new tableau.Viz(containerGa, urlGa);
}*/
var vizGaOt;
var vizGaCa;

function initGaOt(){
    var containerGaOt = document.getElementById("gaOtContainer");
    var urlGaOt = "https://10az.online.tableau.com/t/bmdbi/views/GoogleAnalytics/OverallTrends?:embed=y&:showAppBanner=false&:showShareOptions=true&:display_count=no&:showVizHome=no&:refresh=yes";
    var optionGaOt = {
        hideTabs: true,
        // hideToolbar: true
        width: '100%',
        height: '700px'
    };
    vizGaOt = new tableau.Viz(containerGaOt, urlGaOt, optionGaOt);
}

function initGaCa(){
    var containerGaCa = document.getElementById("gaCaContainer");
    var urlGaCa = "https://10az.online.tableau.com/t/bmdbi/views/GoogleAnalytics/ContentAnalysis?:embed=y&:showAppBanner=false&:showShareOptions=true&:display_count=no&:showVizHome=no&:refresh=yes";
    var optionGaCa = {
        hideTabs: true
        // hideToolbar: true
        // width: '100%',
        // height: '700px'
    };
    vizGaCa = new tableau.Viz(containerGaCa, urlGaCa, optionGaCa);
}