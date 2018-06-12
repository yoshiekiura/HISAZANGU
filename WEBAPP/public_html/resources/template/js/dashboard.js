$(function () {
    "use strict";
    //This is for the Notification top right
   
    Morris.Area({
        element: 'morris-area-chart'
        , data: [{
                period: '2010'
                , broker1: 50
                , broker2: 80
                , broker3: 20
        }, {
                period: '2011'
                , broker1: 130
                , broker2: 100
                , broker3: 80
        }, {
                period: '2012'
                , broker1: 80
                , broker2: 60
                , broker3: 70
        }, {
                period: '2013'
                , broker1: 70
                , broker2: 200
                , broker3: 140
        }, {
                period: '2014'
                , broker1: 180
                , broker2: 150
                , broker3: 140
        }, {
                period: '2015'
                , broker1: 105
                , broker2: 100
                , broker3: 80
        }
            , {
                period: '2016'
                , broker1: 250
                , broker2: 150
                , broker3: 200
        }]
        , xkey: 'period'
        , ykeys: ['broker1', 'broker2', 'broker3']
        , labels: ['Broker 1', 'Broker 2', 'Broker 3']
        , pointSize: 3
        , fillOpacity: 0
        , pointStrokeColors: ['#00bfc7', '#fb9678', '#9675ce']
        , behaveLikeLine: true
        , gridLineColor: '#e0e0e0'
        , lineWidth: 3
        , hideHover: 'auto'
        , lineColors: ['#00bfc7', '#fb9678', '#9675ce']
        , resize: true
    });
    Morris.Area({
        element: 'morris-area-chart2'
        , data: [{
                period: '2010'
                , SiteA: 0
                , SiteB: 0
        , }, {
                period: '2011'
                , SiteA: 130
                , SiteB: 100
        , }, {
                period: '2012'
                , SiteA: 80
                , SiteB: 60
        , }, {
                period: '2013'
                , SiteA: 70
                , SiteB: 200
        , }, {
                period: '2014'
                , SiteA: 180
                , SiteB: 150
        , }, {
                period: '2015'
                , SiteA: 105
                , SiteB: 90
        , }
            , {
                period: '2016'
                , SiteA: 250
                , SiteB: 150
        , }]
        , xkey: 'period'
        , ykeys: ['SiteA', 'SiteB']
        , labels: ['Site A', 'Site B']
        , pointSize: 0
        , fillOpacity: 0.4
        , pointStrokeColors: ['#b4becb', '#01c0c8']
        , behaveLikeLine: true
        , gridLineColor: '#e0e0e0'
        , lineWidth: 0
        , smooth: false
        , hideHover: 'auto'
        , lineColors: ['#b4becb', '#01c0c8']
        , resize: true
    });
});    
    // sparkline
    var sparklineLogin = function() { 
        $('#sales1').sparkline([20, 40, 30], {
            type: 'pie',
            height: '90',
            resize: true,
            sliceColors: ['#01c0c8', '#7d5ab6', '#ffffff']
        });
        $('#sparkline2dash').sparkline([6, 10, 9, 11, 9, 10, 12], {
            type: 'bar',
            height: '154',
            barWidth: '4',
            resize: true,
            barSpacing: '10',
            barColor: '#25a6f7'
        });
        
    };    
    var sparkResize;
 
        $(window).resize(function(e) {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineLogin, 500);
        });
        sparklineLogin();
