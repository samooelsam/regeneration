(function () {
    var a = {};
    function trans(c, d) {
        var e = arguments['length'] === 0x1 ? [arguments[0x0]] : Array['apply'](null, arguments);
        a[e[0x0]] = e;
        return '';
    }
    function regTextVar(c, d) {
        var e = ![];
        d = d['toLowerCase']();
        var f = function () {
            var o = this['get']('data');
            o['updateText'](o['translateObjs'][c]);
        };
        var g = function (o) {
            var p = o['data']['nextSelectedIndex'];
            if (p >= 0x0) {
                var q = o['source']['get']('items')[p];
                var r = function () {
                    q['unbind']('start', r, this);
                    f['call'](this);
                };
                q['bind']('start', r, this);
            } else
                f['call'](this);
        };
        var h = function (o) {
            return function (p) {
                if (o in p) {
                    f['call'](this);
                }
            }['bind'](this);
        };
        var i = function (o, p) {
            return function (q, r) {
                if (o == q && p in r) {
                    f['call'](this);
                }
            }['bind'](this);
        };
        var j = function (o, p, q) {
            for (var r = 0x0; r < o['length']; ++r) {
                var s = o[r];
                var t = s['get']('selectedIndex');
                if (t >= 0x0) {
                    var u = p['split']('.');
                    var v = s['get']('items')[t];
                    if (q !== undefined && !q['call'](this, v))
                        continue;
                    for (var w = 0x0; w < u['length']; ++w) {
                        if (v == undefined)
                            return '';
                        v = 'get' in v ? v['get'](u[w]) : v[u[w]];
                    }
                    return v;
                }
            }
            return '';
        };
        var k = function (o) {
            var p = o['get']('player');
            return p !== undefined && p['get']('viewerArea') == this['getMainViewer']();
        };
        switch (d) {
        case 'title':
        case 'subtitle':
            var m = function () {
                switch (d) {
                case 'title':
                    return 'media.label';
                case 'subtitle':
                    return 'media.data.subtitle';
                }
            }();
            if (m) {
                return function () {
                    var o = this['_getPlayListsWithViewer'](this['getMainViewer']());
                    if (!e) {
                        for (var p = 0x0; p < o['length']; ++p) {
                            o[p]['bind']('changing', g, this);
                        }
                        e = !![];
                    }
                    return j['call'](this, o, m, k);
                };
            }
            break;
        default:
            if (d['startsWith']('quiz.') && 'Quiz' in TDV) {
                var n = undefined;
                var m = function () {
                    switch (d) {
                    case 'quiz.questions.answered':
                        return TDV['Quiz']['PROPERTY']['QUESTIONS_ANSWERED'];
                    case 'quiz.question.count':
                        return TDV['Quiz']['PROPERTY']['QUESTION_COUNT'];
                    case 'quiz.items.found':
                        return TDV['Quiz']['PROPERTY']['ITEMS_FOUND'];
                    case 'quiz.item.count':
                        return TDV['Quiz']['PROPERTY']['ITEM_COUNT'];
                    case 'quiz.score':
                        return TDV['Quiz']['PROPERTY']['SCORE'];
                    case 'quiz.score.total':
                        return TDV['Quiz']['PROPERTY']['TOTAL_SCORE'];
                    case 'quiz.time.remaining':
                        return TDV['Quiz']['PROPERTY']['REMAINING_TIME'];
                    case 'quiz.time.elapsed':
                        return TDV['Quiz']['PROPERTY']['ELAPSED_TIME'];
                    case 'quiz.time.limit':
                        return TDV['Quiz']['PROPERTY']['TIME_LIMIT'];
                    case 'quiz.media.items.found':
                        return TDV['Quiz']['PROPERTY']['PANORAMA_ITEMS_FOUND'];
                    case 'quiz.media.item.count':
                        return TDV['Quiz']['PROPERTY']['PANORAMA_ITEM_COUNT'];
                    case 'quiz.media.questions.answered':
                        return TDV['Quiz']['PROPERTY']['PANORAMA_QUESTIONS_ANSWERED'];
                    case 'quiz.media.question.count':
                        return TDV['Quiz']['PROPERTY']['PANORAMA_QUESTION_COUNT'];
                    case 'quiz.media.score':
                        return TDV['Quiz']['PROPERTY']['PANORAMA_SCORE'];
                    case 'quiz.media.score.total':
                        return TDV['Quiz']['PROPERTY']['PANORAMA_TOTAL_SCORE'];
                    case 'quiz.media.index':
                        return TDV['Quiz']['PROPERTY']['PANORAMA_INDEX'];
                    case 'quiz.media.count':
                        return TDV['Quiz']['PROPERTY']['PANORAMA_COUNT'];
                    case 'quiz.media.visited':
                        return TDV['Quiz']['PROPERTY']['PANORAMA_VISITED_COUNT'];
                    default:
                        var o = /quiz\.([\w_]+)\.(.+)/['exec'](d);
                        if (o) {
                            n = o[0x1];
                            switch ('quiz.' + o[0x2]) {
                            case 'quiz.score':
                                return TDV['Quiz']['OBJECTIVE_PROPERTY']['SCORE'];
                            case 'quiz.score.total':
                                return TDV['Quiz']['OBJECTIVE_PROPERTY']['TOTAL_SCORE'];
                            case 'quiz.media.items.found':
                                return TDV['Quiz']['OBJECTIVE_PROPERTY']['PANORAMA_ITEMS_FOUND'];
                            case 'quiz.media.item.count':
                                return TDV['Quiz']['OBJECTIVE_PROPERTY']['PANORAMA_ITEM_COUNT'];
                            case 'quiz.media.questions.answered':
                                return TDV['Quiz']['OBJECTIVE_PROPERTY']['PANORAMA_QUESTIONS_ANSWERED'];
                            case 'quiz.media.question.count':
                                return TDV['Quiz']['OBJECTIVE_PROPERTY']['PANORAMA_QUESTION_COUNT'];
                            case 'quiz.questions.answered':
                                return TDV['Quiz']['OBJECTIVE_PROPERTY']['QUESTIONS_ANSWERED'];
                            case 'quiz.question.count':
                                return TDV['Quiz']['OBJECTIVE_PROPERTY']['QUESTION_COUNT'];
                            case 'quiz.items.found':
                                return TDV['Quiz']['OBJECTIVE_PROPERTY']['ITEMS_FOUND'];
                            case 'quiz.item.count':
                                return TDV['Quiz']['OBJECTIVE_PROPERTY']['ITEM_COUNT'];
                            case 'quiz.media.score':
                                return TDV['Quiz']['OBJECTIVE_PROPERTY']['PANORAMA_SCORE'];
                            case 'quiz.media.score.total':
                                return TDV['Quiz']['OBJECTIVE_PROPERTY']['PANORAMA_TOTAL_SCORE'];
                            }
                        }
                    }
                }();
                if (m) {
                    return function () {
                        var o = this['get']('data')['quiz'];
                        if (o) {
                            if (!e) {
                                if (n != undefined)
                                    if (n == 'global') {
                                        var q = this['get']('data')['quizConfig'];
                                        var s = q['objectives'];
                                        for (var u = 0x0, w = s['length']; u < w; ++u) {
                                            o['bind'](TDV['Quiz']['EVENT_OBJECTIVE_PROPERTIES_CHANGE'], i['call'](this, s[u]['id'], m), this);
                                        }
                                    } else {
                                        o['bind'](TDV['Quiz']['EVENT_OBJECTIVE_PROPERTIES_CHANGE'], i['call'](this, n, m), this);
                                    }
                                else
                                    o['bind'](TDV['Quiz']['EVENT_PROPERTIES_CHANGE'], h['call'](this, m), this);
                                e = !![];
                            }
                            try {
                                var x = 0x0;
                                if (n != undefined) {
                                    if (n == 'global') {
                                        var q = this['get']('data')['quizConfig'];
                                        var s = q['objectives'];
                                        for (var u = 0x0, w = s['length']; u < w; ++u) {
                                            x += o['getObjective'](s[u]['id'], m);
                                        }
                                    } else {
                                        x = o['getObjective'](n, m);
                                    }
                                } else {
                                    x = o['get'](m);
                                    if (m == TDV['Quiz']['PROPERTY']['PANORAMA_INDEX'])
                                        x += 0x1;
                                }
                                return x;
                            } catch (y) {
                                return undefined;
                            }
                        }
                    };
                }
            }
            break;
        }
        return '';
    }
    function createQuizConfig(player, c) {
        var d = {};
        d['player'] = player;
        d['playList'] = c;
        function e(h) {
            for (var j = 0x0; j < h['length']; ++j) {
                var k = h[j];
                if ('id' in k)
                    player[k['id']] = k;
            }
        }
        if (d['questions']) {
            e(d['questions']);
            for (var f = 0x0; f < d['questions']['length']; ++f) {
                var g = d['questions'][f];
                e(g['options']);
            }
        }
        if (d['objectives']) {
            e(d['objectives']);
        }
        if (d['califications']) {
            e(d['califications']);
        }
        if (d['score']) {
            player[d['score']['id']] = d['score'];
        }
        if (d['question']) {
            player[d['question']['id']] = d['question'];
        }
        if (d['timeout']) {
            player[d['timeout']['id']] = d['timeout'];
        }
        player['get']('data')['translateObjs'] = a;
        return d;
    }
    var b = {"defaultVRPointer":"laser","scrollBarColor":"#000000","mobileMipmappingEnabled":false,"desktopMipmappingEnabled":false,"propagateClick":false,"toolTipHorizontalAlign":"center","id":"rootPlayer","backgroundColorDirection":"vertical","paddingLeft":0,"paddingBottom":0,"verticalAlign":"top","width":"100%","children":["this.MainViewer","this.Image_73146DB9_6340_7880_41D4_46D6CF889044"],"backgroundColorRatios":[0],"definitions": [{"hfovMax":130,"hfovMin":"120%","thumbnailUrl":"media/panorama_73C19707_6340_6980_41D6_BD60E6B0D892_t.jpg","vfov":180,"partial":false,"id":"panorama_73C19707_6340_6980_41D6_BD60E6B0D892","class":"Panorama","frames":[{"cube":{"class":"ImageResource","levels":[{"url":"media/panorama_73C19707_6340_6980_41D6_BD60E6B0D892_0/{face}/0/{row}_{column}.jpg","colCount":36,"rowCount":6,"class":"TiledImageResourceLevel","width":18432,"tags":"ondemand","height":3072},{"url":"media/panorama_73C19707_6340_6980_41D6_BD60E6B0D892_0/{face}/1/{row}_{column}.jpg","colCount":18,"rowCount":3,"class":"TiledImageResourceLevel","width":9216,"tags":"ondemand","height":1536},{"url":"media/panorama_73C19707_6340_6980_41D6_BD60E6B0D892_0/{face}/2/{row}_{column}.jpg","colCount":12,"rowCount":2,"class":"TiledImageResourceLevel","width":6144,"tags":"ondemand","height":1024},{"url":"media/panorama_73C19707_6340_6980_41D6_BD60E6B0D892_0/{face}/3/{row}_{column}.jpg","colCount":6,"rowCount":1,"class":"TiledImageResourceLevel","width":3072,"tags":["ondemand","preload"],"height":512},{"url":"media/panorama_73C19707_6340_6980_41D6_BD60E6B0D892_0/{face}/vr/0.jpg","colCount":6,"rowCount":1,"class":"TiledImageResourceLevel","width":9216,"tags":"mobilevr","height":1536}]},"class":"CubicPanoramaFrame","thumbnailUrl":"media/panorama_73C19707_6340_6980_41D6_BD60E6B0D892_t.jpg"}],"data":{"label":"JFHUNT - 360 - MOONSCAPE"},"pitch":0,"label":trans('panorama_73C19707_6340_6980_41D6_BD60E6B0D892.label'),"hfov":360},{"items":[{"media":"this.panorama_73C19707_6340_6980_41D6_BD60E6B0D892","end":"this.trigger('tourEnded')","camera":"this.panorama_73C19707_6340_6980_41D6_BD60E6B0D892_camera","player":"this.MainViewerPanoramaPlayer","class":"PanoramaPlayListItem"}],"id":"mainPlayList","class":"PlayList"},{"viewerArea":"this.MainViewer","arrowKeysAction":"translate","displayPlaybackBar":true,"id":"MainViewerPanoramaPlayer","aaEnabled":true,"class":"PanoramaPlayer","surfaceSelectionEnabled":false,"zoomEnabled":true,"mouseControlMode":"drag_rotation","touchControlMode":"drag_rotation","gyroscopeVerticalDraggingEnabled":true},{"initialPosition":{"yaw":177.4,"class":"PanoramaCameraPosition","pitch":-6.96},"initialSequence":"this.sequence_6DF43525_6340_6980_419B_F3D23C051D77","hoverFactor":0,"automaticZoomSpeed":10,"id":"panorama_73C19707_6340_6980_41D6_BD60E6B0D892_camera","class":"PanoramaCamera"},{"data":{"name":"Image4784"},"propagateClick":false,"toolTipHorizontalAlign":"center","id":"Image_73146DB9_6340_7880_41D4_46D6CF889044","left":"2.67%","width":"15.243%","paddingLeft":0,"paddingBottom":0,"verticalAlign":"middle","paddingRight":0,"url":"skin/Image_73146DB9_6340_7880_41D4_46D6CF889044.png","borderSize":0,"horizontalAlign":"center","top":"3.66%","borderRadius":0,"height":"8.298%","backgroundOpacity":0,"click":"this.openLink(this.translate('LinkBehaviour_72B2AD88_6340_1880_41C4_ACEBC857BBC9.source'), '_blank')","minHeight":1,"minWidth":1,"shadow":false,"scaleMode":"fit_inside","class":"Image","paddingTop":0},{"toolTipFontFamily":"Arial","progressBarOpacity":1,"id":"MainViewer","data":{"name":"Main Viewer"},"left":0,"playbackBarHeadBorderRadius":0,"playbackBarProgressBackgroundColorDirection":"vertical","width":"100%","subtitlesEnabled":true,"toolTipBorderColor":"#767676","subtitlesVerticalAlign":"bottom","playbackBarProgressOpacity":1,"toolTipBorderSize":1,"toolTipFontSize":"1.11vmin","progressHeight":10,"translationTransitionDuration":1000,"toolTipPaddingTop":4,"subtitlesTextShadowOpacity":1,"playbackBarHeadBorderColor":"#000000","borderSize":0,"playbackBarBackgroundColor":["#FFFFFF"],"playbackBarHeadShadowBlurRadius":3,"progressBorderSize":0,"subtitlesBorderSize":0,"playbackBarHeadBackgroundColorDirection":"vertical","progressOpacity":1,"progressRight":0,"toolTipTextShadowBlurRadius":3,"playbackBarHeadWidth":6,"surfaceReticleColor":"#FFFFFF","subtitlesFontColor":"#FFFFFF","transitionDuration":500,"playbackBarBackgroundOpacity":1,"progressBarBorderRadius":0,"height":"100%","progressBorderColor":"#000000","progressBarBorderSize":0,"playbackBarHeight":10,"playbackBarBorderSize":0,"playbackBarRight":0,"playbackBarHeadShadowVerticalLength":0,"playbackBarBackgroundColorDirection":"vertical","shadow":false,"progressBarBackgroundColor":["#3399FF"],"subtitlesFontWeight":"normal","toolTipTextShadowOpacity":0,"progressBarBorderColor":"#000000","progressBarBackgroundColorDirection":"vertical","toolTipPaddingBottom":4,"subtitlesPaddingLeft":5,"playbackBarProgressBorderSize":0,"playbackBarProgressBorderRadius":0,"subtitlesBottom":50,"surfaceReticleSelectionColor":"#FFFFFF","playbackBarLeft":0,"toolTipFontWeight":"normal","displayTooltipInTouchScreens":true,"surfaceReticleOpacity":0.6,"toolTipFontColor":"#606060","playbackBarProgressBackgroundColor":["#3399FF"],"paddingTop":0,"toolTipHorizontalAlign":"center","subtitlesPaddingRight":5,"toolTipShadowVerticalLength":0,"progressBarBackgroundColorRatios":[0],"subtitlesTop":0,"paddingBottom":0,"playbackBarHeadHeight":15,"toolTipPaddingRight":6,"displayTooltipInSurfaceSelection":true,"playbackBarHeadShadowOpacity":0.7,"subtitlesPaddingBottom":5,"propagateClick":false,"toolTipFontStyle":"normal","subtitlesFontSize":"3vmin","progressBackgroundColorDirection":"vertical","toolTipShadowSpread":0,"paddingLeft":0,"firstTransitionDuration":0,"subtitlesTextShadowColor":"#000000","subtitlesBackgroundOpacity":0.2,"playbackBarHeadBackgroundColorRatios":[0,1],"playbackBarHeadShadowColor":"#000000","subtitlesBorderColor":"#FFFFFF","paddingRight":0,"playbackBarHeadShadowHorizontalLength":0,"toolTipShadowHorizontalLength":0,"subtitlesTextDecoration":"none","progressBorderRadius":0,"playbackBarHeadBorderSize":0,"toolTipPaddingLeft":6,"surfaceReticleSelectionOpacity":1,"subtitlesTextShadowHorizontalLength":1,"toolTipOpacity":1,"progressLeft":0,"subtitlesTextShadowBlurRadius":0,"top":0,"playbackBarHeadShadow":true,"toolTipBackgroundColor":"#F6F6F6","borderRadius":0,"playbackBarHeadOpacity":1,"subtitlesPaddingTop":5,"playbackBarProgressBackgroundColorRatios":[0],"progressBackgroundColor":["#FFFFFF"],"vrPointerSelectionColor":"#FF6600","subtitlesFontFamily":"Arial","toolTipDisplayTime":600,"subtitlesShadow":false,"minHeight":50,"minWidth":100,"subtitlesTextShadowVerticalLength":1,"playbackBarOpacity":1,"playbackBarHeadBackgroundColor":["#111111","#666666"],"progressBackgroundOpacity":1,"playbackBarBorderColor":"#FFFFFF","toolTipShadowColor":"#333333","playbackBarProgressBorderColor":"#000000","subtitlesOpacity":1,"playbackBarBorderRadius":0,"subtitlesBackgroundColor":"#000000","subtitlesGap":0,"toolTipShadowBlurRadius":3,"toolTipBorderRadius":3,"transitionMode":"blending","playbackBarBottom":5,"class":"ViewerArea","doubleClickAction":"toggle_fullscreen","progressBottom":0,"vrPointerSelectionTime":2000,"subtitlesHorizontalAlign":"center","vrPointerColor":"#FFFFFF","progressBackgroundColorRatios":[0],"toolTipTextShadowColor":"#000000","toolTipShadowOpacity":1},{"restartMovementOnUserInteraction":false,"id":"sequence_6DF43525_6340_6980_419B_F3D23C051D77","movements":[{"yawDelta":18.5,"easing":"cubic_in","class":"DistancePanoramaCameraMovement","yawSpeed":7.96},{"yawDelta":323,"easing":"linear","class":"DistancePanoramaCameraMovement","yawSpeed":7.96},{"yawDelta":18.5,"easing":"cubic_out","class":"DistancePanoramaCameraMovement","yawSpeed":7.96}],"class":"PanoramaCameraSequence"}],"gap":10,"mediaActivationMode":"window","paddingRight":0,"backgroundPreloadEnabled":true,"scrollBarMargin":2,"overflow":"hidden","borderSize":0,"downloadEnabled":false,"horizontalAlign":"left","start":"this.init()","scrollBarWidth":10,"scripts":{"shareSocial":TDV.Tour.Script.shareSocial,"mixObject":TDV.Tour.Script.mixObject,"htmlToPlainText":TDV.Tour.Script.htmlToPlainText,"skip3DTransitionOnce":TDV.Tour.Script.skip3DTransitionOnce,"historyGoForward":TDV.Tour.Script.historyGoForward,"pauseCurrentPlayers":TDV.Tour.Script.pauseCurrentPlayers,"historyGoBack":TDV.Tour.Script.historyGoBack,"openEmbeddedPDF":TDV.Tour.Script.openEmbeddedPDF,"sendAnalyticsData":TDV.Tour.Script.sendAnalyticsData,"getComponentByName":TDV.Tour.Script.getComponentByName,"stopTextToSpeech":TDV.Tour.Script.stopTextToSpeech,"getPlayListsWithMedia":TDV.Tour.Script.getPlayListsWithMedia,"setMapLocation":TDV.Tour.Script.setMapLocation,"getPlayListItemByMedia":TDV.Tour.Script.getPlayListItemByMedia,"getComponentsByTags":TDV.Tour.Script.getComponentsByTags,"existsKey":TDV.Tour.Script.existsKey,"clone":TDV.Tour.Script.clone,"stopGlobalAudios":TDV.Tour.Script.stopGlobalAudios,"getMediaByTags":TDV.Tour.Script.getMediaByTags,"getPlayListItems":TDV.Tour.Script.getPlayListItems,"getFirstPlayListWithMedia":TDV.Tour.Script.getFirstPlayListWithMedia,"getPixels":TDV.Tour.Script.getPixels,"setValue":TDV.Tour.Script.setValue,"init":TDV.Tour.Script.init,"stopGlobalAudio":TDV.Tour.Script.stopGlobalAudio,"registerKey":TDV.Tour.Script.registerKey,"setLocale":TDV.Tour.Script.setLocale,"getMediaByName":TDV.Tour.Script.getMediaByName,"unregisterKey":TDV.Tour.Script.unregisterKey,"visibleComponentsIfPlayerFlagEnabled":TDV.Tour.Script.visibleComponentsIfPlayerFlagEnabled,"getMainViewer":TDV.Tour.Script.getMainViewer,"setStartTimeVideoSync":TDV.Tour.Script.setStartTimeVideoSync,"getPlayListWithItem":TDV.Tour.Script.getPlayListWithItem,"_getPlayListsWithViewer":TDV.Tour.Script._getPlayListsWithViewer,"getGlobalAudio":TDV.Tour.Script.getGlobalAudio,"fixTogglePlayPauseButton":TDV.Tour.Script.fixTogglePlayPauseButton,"updateMediaLabelFromPlayList":TDV.Tour.Script.updateMediaLabelFromPlayList,"getCurrentPlayers":TDV.Tour.Script.getCurrentPlayers,"resumeGlobalAudios":TDV.Tour.Script.resumeGlobalAudios,"updateDeepLink":TDV.Tour.Script.updateDeepLink,"loadFromCurrentMediaPlayList":TDV.Tour.Script.loadFromCurrentMediaPlayList,"getKey":TDV.Tour.Script.getKey,"getCurrentPlayerWithMedia":TDV.Tour.Script.getCurrentPlayerWithMedia,"updateVideoCues":TDV.Tour.Script.updateVideoCues,"triggerOverlay":TDV.Tour.Script.triggerOverlay,"getActivePlayerWithViewer":TDV.Tour.Script.getActivePlayerWithViewer,"setStartTimeVideo":TDV.Tour.Script.setStartTimeVideo,"getActiveMediaWithViewer":TDV.Tour.Script.getActiveMediaWithViewer,"resumePlayers":TDV.Tour.Script.resumePlayers,"_initTTSTooltips":TDV.Tour.Script._initTTSTooltips,"textToSpeechComponent":TDV.Tour.Script.textToSpeechComponent,"setSurfaceSelectionHotspotMode":TDV.Tour.Script.setSurfaceSelectionHotspotMode,"quizShowScore":TDV.Tour.Script.quizShowScore,"openLink":TDV.Tour.Script.openLink,"setPanoramaCameraWithSpot":TDV.Tour.Script.setPanoramaCameraWithSpot,"setPanoramaCameraWithCurrentSpot":TDV.Tour.Script.setPanoramaCameraWithCurrentSpot,"quizShowTimeout":TDV.Tour.Script.quizShowTimeout,"syncPlaylists":TDV.Tour.Script.syncPlaylists,"_initItemWithComps":TDV.Tour.Script._initItemWithComps,"setOverlaysVisibilityByTags":TDV.Tour.Script.setOverlaysVisibilityByTags,"stopAndGoCamera":TDV.Tour.Script.stopAndGoCamera,"setOverlaysVisibility":TDV.Tour.Script.setOverlaysVisibility,"quizStart":TDV.Tour.Script.quizStart,"keepCompVisible":TDV.Tour.Script.keepCompVisible,"quizFinish":TDV.Tour.Script.quizFinish,"setMediaBehaviour":TDV.Tour.Script.setMediaBehaviour,"executeFunctionWhenChange":TDV.Tour.Script.executeFunctionWhenChange,"downloadFile":TDV.Tour.Script.downloadFile,"copyToClipboard":TDV.Tour.Script.copyToClipboard,"startPanoramaWithCamera":TDV.Tour.Script.startPanoramaWithCamera,"copyObjRecursively":TDV.Tour.Script.copyObjRecursively,"setOverlayBehaviour":TDV.Tour.Script.setOverlayBehaviour,"setMainMediaByName":TDV.Tour.Script.setMainMediaByName,"cloneCamera":TDV.Tour.Script.cloneCamera,"quizShowQuestion":TDV.Tour.Script.quizShowQuestion,"setMainMediaByIndex":TDV.Tour.Script.setMainMediaByIndex,"getPanoramaOverlaysByTags":TDV.Tour.Script.getPanoramaOverlaysByTags,"textToSpeech":TDV.Tour.Script.textToSpeech,"showWindow":TDV.Tour.Script.showWindow,"isPanorama":TDV.Tour.Script.isPanorama,"quizSetItemFound":TDV.Tour.Script.quizSetItemFound,"changePlayListWithSameSpot":TDV.Tour.Script.changePlayListWithSameSpot,"getPanoramaOverlayByName":TDV.Tour.Script.getPanoramaOverlayByName,"isCardboardViewMode":TDV.Tour.Script.isCardboardViewMode,"getOverlaysByTags":TDV.Tour.Script.getOverlaysByTags,"changeOpacityWhilePlay":TDV.Tour.Script.changeOpacityWhilePlay,"getOverlays":TDV.Tour.Script.getOverlays,"showPopupPanoramaVideoOverlay":TDV.Tour.Script.showPopupPanoramaVideoOverlay,"setEndToItemIndex":TDV.Tour.Script.setEndToItemIndex,"playGlobalAudio":TDV.Tour.Script.playGlobalAudio,"setComponentsVisibilityByTags":TDV.Tour.Script.setComponentsVisibilityByTags,"playGlobalAudioWhilePlay":TDV.Tour.Script.playGlobalAudioWhilePlay,"showPopupPanoramaOverlay":TDV.Tour.Script.showPopupPanoramaOverlay,"_getObjectsByTags":TDV.Tour.Script._getObjectsByTags,"changeBackgroundWhilePlay":TDV.Tour.Script.changeBackgroundWhilePlay,"showPopupImage":TDV.Tour.Script.showPopupImage,"getMediaHeight":TDV.Tour.Script.getMediaHeight,"playAudioList":TDV.Tour.Script.playAudioList,"setComponentVisibility":TDV.Tour.Script.setComponentVisibility,"getMediaWidth":TDV.Tour.Script.getMediaWidth,"_initTwinsViewer":TDV.Tour.Script._initTwinsViewer,"pauseGlobalAudios":TDV.Tour.Script.pauseGlobalAudios,"setCameraSameSpotAsMedia":TDV.Tour.Script.setCameraSameSpotAsMedia,"translate":TDV.Tour.Script.translate,"pauseGlobalAudio":TDV.Tour.Script.pauseGlobalAudio,"showComponentsWhileMouseOver":TDV.Tour.Script.showComponentsWhileMouseOver,"initQuiz":TDV.Tour.Script.initQuiz,"autotriggerAtStart":TDV.Tour.Script.autotriggerAtStart,"initAnalytics":TDV.Tour.Script.initAnalytics,"showPopupMedia":TDV.Tour.Script.showPopupMedia,"pauseGlobalAudiosWhilePlayItem":TDV.Tour.Script.pauseGlobalAudiosWhilePlayItem,"getMediaFromPlayer":TDV.Tour.Script.getMediaFromPlayer,"assignObjRecursively":TDV.Tour.Script.assignObjRecursively,"_initSplitViewer":TDV.Tour.Script._initSplitViewer},"borderRadius":0,"backgroundColor":["#FFFFFF"],"layout":"absolute","backgroundOpacity":1,"scrollBarVisible":"rollOver","minHeight":20,"scrollBarOpacity":0.5,"minWidth":20,"height":"100%","shadow":false,"contentOpaque":false,"class":"Player","mouseWheelEnabled":true,"paddingTop":0,"vrPolyfillScale":0.75,"data":{"name":"Player4474","defaultLocale":"en","textToSpeechConfig":{"speechOnTooltip":false,"pitch":1,"stopBackgroundAudio":false,"speechOnInfoWindow":false,"speechOnQuizQuestion":false,"volume":1,"rate":1},"locales":{"en":"locale/en.txt"}}};
    if (b['data'] == undefined)
        b['data'] = {};
    b['data']['translateObjs'] = a;
    b['data']['history'] = {};
    b['scripts']['createQuizConfig'] = createQuizConfig;
    TDV['PlayerAPI']['defineScript'](b);
}());
//# sourceMappingURL=http://localhost:9000/script_device_v2021.1.7.js.map
//Generated with v2021.1.7, Fri Aug 20 2021