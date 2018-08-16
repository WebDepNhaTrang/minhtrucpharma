<!-- Slider -->
@php
    $banners = getAllBanners('*', 'created_at', 'asc');
@endphp
@if( $banners->count() > 0 )
<div class="main-slider style-two default-banner">
    <div class="tp-banner-container">
        <div class="tp-banner" >
            <div id="dz_rev_slider_4_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                <div id="dz_rev_slider_4" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
                    <ul>
                        @php
                            $rs = 100;
                        @endphp
                        @foreach( $banners as $v )
                        <!-- SLIDE  -->
                        <li data-index="rs-{{ $rs }}" data-transition="parallaxvertical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{ Voyager::image($v->image) }}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="{{ $v->title }}" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ Voyager::image($v->image) }}"  alt="{{ $v->title }}"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <div class="tp-caption tp-shape tp-shapewrapper " id="slide-{{ $rs }}-layer-1" 
                            data-x="['center','center','center','center']" 
                            data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" 
                            data-voffset="['0','0','0','0']" 
                            data-width="full" data-height="full" 
                            data-whitespace="nowrap" 
                            data-type="shape" 
                            data-basealign="slide" 
                            data-responsive_offset="off" 
                            data-responsive="off" 
                            data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]' 
                            data-textAlign="['left','left','left','left']" 
                            data-paddingtop="[0,0,0,0]" 
                            data-paddingright="[0,0,0,0]" 
                            data-paddingbottom="[0,0,0,0]" 
                            data-paddingleft="[0,0,0,0]" 
                            style="z-index: 2;background-color:rgba(0, 0, 0, 0.0);border-color:rgba(0, 0, 0, 0);border-width:0px;" > </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption Newspaper-Title   tp-resizeme" 
                                id="slide-{{ $rs }}-layer-3" 
                                data-x="['left','left','left','left']" 
                                data-hoffset="['50','50','50','30']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['220','220','220','100']" 
                                data-fontsize="['50','50','50','30']"
                                data-lineheight="['85','85','55','35']"
                                data-width="['1000','1000','1000','420']"
                                data-height="none"
                                data-whitespace="normal"
                        
                                data-type="text" 
                                data-responsive_offset="on" 

                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[10,10,10,10]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 6; white-space: normal;text-transform:left; font-weight:bold; line-height:50px; font-family: 'Open Sans', sans-serif; color:#fff;">{{ $v->title }}</div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Newspaper-Title   tp-resizeme" 
                                id="slide-{{ $rs }}-layer-4" 
                                data-x="['left','left','left','left']" 
                                data-hoffset="['50','50','50','30']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['310','310','310','145']" 
                                data-fontsize="['16','15','14','13']"
                                data-lineheight="['22','22','22','22']"
                                data-width="['700','600','600','420']"
                                data-height="none"
                                data-whitespace="normal"
                        
                                data-type="text" 
                                data-responsive_offset="on" 

                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[10,10,10,10]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 6; white-space: normal;text-transform:left; line-height:80px; color:#fff; font-family:'Open Sans', sans-serif">{!! $v->description !!}</div>
                            <!-- LAYER NR. 4 -->
                            @if( $v->text_btn )
                            <div class="tp-caption" 
                                id="slide-{{ $rs }}-layer-5" 
                                data-x="['left','left','left','left']" data-hoffset="['53','53','60','30']" 
                                data-y="['top','top','top','top']" data-voffset="['410','410','410','250']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-responsive_offset="on" 
                                data-responsive="off"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"

                                style="z-index: 8; white-space: nowrap; background-color:rgba(0, 0, 0, 0) !important;"> <a href="{{ $v->link_btn }}" class="site-button button-lg">{{ $v->text_btn }} </a> </div>
                            @endif
                        </li>
                        <!-- SLIDE  -->
                            @php $rs += 100; @endphp
                        @endforeach
                        
                        
                    </ul>
                    <div class="tp-bannertimer tp-bottom bg-primary" style="height: 5px; "></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
    </div>
</div>
@endif