/*!
 * @license Copyright (c) 2019, FoxUi. All rights reserved.
 */

/**
 * 计数按钮插件
 */
Vue.component('buttonCounter', {
    data: function () {
        return {count: 0}
    }, template: '<el-button @click="count++">You clicked me {{ count }} times.</el-button>'
});

/**
 * 天气图标插件
 */
Vue.component('weatherIcon', {
    props: {state: {type: String, default: 'xue'}, size: {type: Number, default: .2}},
    template: `<lable><svg v-if="state=='xue'"t="1570180505139"class="icon"viewBox="0 0 1024 1024"version="1.1"xmlns="http://www.w3.org/2000/svg"p-id="2167":style="{'width':size+'rem','height':size+'rem'}"><path d="M88.975 564.47h779.162s185.518-121.938-24.73-226.857c0 0-17.008-204.176-234.987-204.176 0 0-225.71-29.767-247.358 215.511 0 0-161.228-21.923-157.327 123.362-102.984-44.114-143.002 92.006-114.76 92.16z"fill="#CCDCF5"p-id="2168"></path><path d="M847.165 731.372a22.016 22.016 0 0 1-19.968 1.167l-41.984 24.689a41.236 41.236 0 0 1 1.7 11.489c0 1.085-0.174 2.13-0.256 3.195l40.571 23.838a22.016 22.016 0 0 1 19.968 1.168 22.835 22.835 0 0 1 11.141 19.855 9.216 9.216 0 0 1-0.665 7.414l-4.496 7.915a8.888 8.888 0 0 1-5.98 4.301 22.036 22.036 0 0 1-22.466 0.113 22.794 22.794 0 0 1-10.978-17.019l-38.164-22.415a40.796 40.796 0 0 1-15.637 10.24v43.765a22.866 22.866 0 0 1-2.334 37.888 8.817 8.817 0 0 1-6.646 3.124h-8.99a8.796 8.796 0 0 1-6.647-3.124A22.866 22.866 0 0 1 733 851.087v-43.745a40.724 40.724 0 0 1-15.637-10.24L679.2 819.517a22.784 22.784 0 0 1-10.988 17.02 22.047 22.047 0 0 1-22.466-0.113 8.868 8.868 0 0 1-5.97-4.301l-4.496-7.916a9.216 9.216 0 0 1-0.665-7.413 22.856 22.856 0 0 1 11.13-19.856 22.016 22.016 0 0 1 19.969-1.167l40.57-23.839c-0.081-1.024-0.245-2.11-0.245-3.195a41.236 41.236 0 0 1 1.7-11.489l-41.984-24.689a22.016 22.016 0 0 1-19.968-1.167 22.856 22.856 0 0 1-11.131-19.855 9.216 9.216 0 0 1 0.665-7.414l4.496-7.916a8.868 8.868 0 0 1 5.97-4.3 22.047 22.047 0 0 1 22.466-0.103 22.764 22.764 0 0 1 10.988 17.009l44.564 26.173a40.417 40.417 0 0 1 9.216-4.874v-52.91a22.866 22.866 0 0 1 2.335-37.888 8.817 8.817 0 0 1 6.646-3.072h8.908a8.837 8.837 0 0 1 6.646 3.072 22.866 22.866 0 0 1 2.335 37.888v52.91a40.13 40.13 0 0 1 9.216 4.874l44.575-26.173a22.784 22.784 0 0 1 10.977-17.009 22.047 22.047 0 0 1 22.466 0.103 8.888 8.888 0 0 1 5.98 4.3l4.496 7.916a9.216 9.216 0 0 1 0.666 7.414 22.835 22.835 0 0 1-11.1 19.835z m-235.52 14.336a22.835 22.835 0 0 1 11.142 19.855 9.134 9.134 0 0 1-0.676 7.414l-4.485 7.915a8.888 8.888 0 0 1-5.98 4.301 22.036 22.036 0 0 1-22.467 0.113 22.794 22.794 0 0 1-10.977-17.02l-38.165-22.415a40.796 40.796 0 0 1-15.636 10.24v43.766a22.886 22.886 0 0 1-2.335 37.888 8.817 8.817 0 0 1-6.646 3.123h-8.99a8.796 8.796 0 0 1-6.646-3.123 22.876 22.876 0 0 1-2.345-37.888v-43.735a40.765 40.765 0 0 1-15.627-10.24l-38.164 22.415a22.784 22.784 0 0 1-10.988 17.02 22.036 22.036 0 0 1-22.466-0.113 8.868 8.868 0 0 1-5.97-4.301l-4.495-7.916a9.216 9.216 0 0 1-0.666-7.413 22.856 22.856 0 0 1 11.13-19.856 22.016 22.016 0 0 1 19.969-1.167l40.57-23.839c-0.081-1.024-0.245-2.11-0.245-3.195a41.236 41.236 0 0 1 1.7-11.489l-41.984-24.689a22.016 22.016 0 0 1-19.968-1.167 22.856 22.856 0 0 1-11.131-19.855 9.216 9.216 0 0 1 0.666-7.414l4.495-7.916a8.868 8.868 0 0 1 5.97-4.3 22.047 22.047 0 0 1 22.466-0.103 22.743 22.743 0 0 1 10.988 17.009l44.564 26.173a40.56 40.56 0 0 1 9.216-4.874v-52.91a22.876 22.876 0 0 1 2.345-37.888 8.786 8.786 0 0 1 6.646-3.072h8.93a8.806 8.806 0 0 1 6.645 3.072 22.886 22.886 0 0 1 2.335 37.888v52.91a40.632 40.632 0 0 1 9.216 4.874l44.564-26.173a22.764 22.764 0 0 1 10.978-17.009 22.047 22.047 0 0 1 22.466 0.103 8.888 8.888 0 0 1 5.98 4.3l4.486 7.916a9.134 9.134 0 0 1 0.675 7.414 22.835 22.835 0 0 1-11.14 19.855 22.016 22.016 0 0 1-19.969 1.167l-41.984 24.689a41.236 41.236 0 0 1 1.7 11.49c0 1.085-0.174 2.13-0.256 3.194l40.571 23.839a22.016 22.016 0 0 1 19.988 1.147z m-245.76 51.2a22.835 22.835 0 0 1 11.142 19.855 9.216 9.216 0 0 1-0.666 7.414l-4.495 7.915a8.888 8.888 0 0 1-5.98 4.301 22.036 22.036 0 0 1-22.467 0.113 22.794 22.794 0 0 1-10.977-17.02l-38.165-22.415a40.796 40.796 0 0 1-15.636 10.24v43.766a22.866 22.866 0 0 1-2.335 37.888 8.817 8.817 0 0 1-6.656 3.123h-8.98a8.796 8.796 0 0 1-6.646-3.123 22.866 22.866 0 0 1-2.335-37.888v-43.735a40.724 40.724 0 0 1-15.637-10.24l-38.164 22.415a22.784 22.784 0 0 1-10.988 17.02 22.026 22.026 0 0 1-22.456-0.113 8.868 8.868 0 0 1-5.98-4.301l-4.495-7.916a9.216 9.216 0 0 1-0.666-7.413 22.856 22.856 0 0 1 11.13-19.856 22.016 22.016 0 0 1 19.969-1.167l40.57-23.839c-0.081-1.024-0.245-2.11-0.245-3.195a41.236 41.236 0 0 1 1.7-11.489l-41.984-24.689a22.016 22.016 0 0 1-19.968-1.167 22.856 22.856 0 0 1-11.131-19.855 9.216 9.216 0 0 1 0.666-7.414l4.495-7.916a8.868 8.868 0 0 1 5.98-4.3 22.026 22.026 0 0 1 22.456-0.103 22.764 22.764 0 0 1 10.988 17.009l44.564 26.173a40.417 40.417 0 0 1 9.216-4.874v-52.91a22.866 22.866 0 0 1 2.335-37.888 8.817 8.817 0 0 1 6.646-3.072h8.94a8.847 8.847 0 0 1 6.655 3.072 22.866 22.866 0 0 1 2.335 37.888v52.91a40.13 40.13 0 0 1 9.216 4.874l44.575-26.173a22.784 22.784 0 0 1 10.977-17.009 22.047 22.047 0 0 1 22.467 0.103 8.888 8.888 0 0 1 5.98 4.3l4.495 7.916a9.216 9.216 0 0 1 0.666 7.414 22.835 22.835 0 0 1-11.141 19.855 22.016 22.016 0 0 1-19.968 1.167l-41.984 24.689a41.236 41.236 0 0 1 1.7 11.49c0 1.085-0.175 2.13-0.256 3.194l40.57 23.839a22.016 22.016 0 0 1 19.968 1.147z"fill="#FFCD00"p-id="2169"></path></svg><svg v-if="state=='bingbao'"t="1570180897607"class="icon"viewBox="0 0 1024 1024"version="1.1"xmlns="http://www.w3.org/2000/svg"p-id="2451":style="{'width':size+'rem','height':size+'rem'}"><path d="M867.942 559.002H88.781c-28.263-0.154 11.776-136.264 114.688-92.16-3.891-145.286 157.389-123.351 157.389-123.351C382.464 98.2 608.154 127.98 608.154 127.98c218.01 0 235.008 204.165 235.008 204.165 210.227 105 24.78 226.857 24.78 226.857zM223.95 852.429a46.08 46.08 0 0 1-92.16 0c0-24.576 46.08-98.867 46.08-98.867s46.08 74.332 46.08 98.898z m40.96-252.467s40.96 63.682 40.96 84.746a41.062 41.062 0 0 1-81.92 0c0-21.033 40.96-84.746 40.96-84.746z m440.32 252.467a46.08 46.08 0 0 1-92.16 0c0-24.576 46.08-98.867 46.08-98.867s46.08 74.332 46.08 98.898z m40.96-252.467s40.96 68.997 40.96 91.811a40.96 40.96 0 1 1-81.92 0c0-22.784 40.96-91.811 40.96-91.811z"fill="#CCDCF5"p-id="2452"></path><path d="M520.909 835.482h-81.92v-143.36h81.92v143.36z"fill="#FFCD00"p-id="2453"></path></svg><svg v-if="state=='yun'"t="1570180950927"class="icon"viewBox="0 0 1024 1024"version="1.1"xmlns="http://www.w3.org/2000/svg"p-id="2771":style="{'width':size+'rem','height':size+'rem'}"><path d="M526.05 391.434a20.132 20.132 0 0 1-28.673 0l-5.724-5.765a20.531 20.531 0 0 1 0-28.866l74.455-75.05a20.132 20.132 0 0 1 28.672 0l5.724 5.766a20.531 20.531 0 0 1 0 28.866z m-97.045 209.388a181.166 181.166 0 0 0-65.997 35.737 126.454 126.454 0 1 1 133.775-165.58 239.473 239.473 0 0 0-67.778 129.843z m-50.176-249.068h-10.24a19.17 19.17 0 0 1-19.17-19.18V223.98a19.17 19.17 0 0 1 19.15-19.18h10.24a19.17 19.17 0 0 1 19.179 19.18v108.595a19.17 19.17 0 0 1-19.18 19.18z m-129.352 39.68a20.255 20.255 0 0 1-28.744 0l-74.752-75.049a20.48 20.48 0 0 1 0-28.866l5.755-5.765a20.244 20.244 0 0 1 28.734 0l74.752 75.049a20.48 20.48 0 0 1 0 28.866z m-37.263 111.35v8.192a20.367 20.367 0 0 1-20.316 20.408H86.23a20.367 20.367 0 0 1-20.316-20.408v-8.192a20.357 20.357 0 0 1 20.316-20.408h105.636a20.357 20.357 0 0 1 20.347 20.408z m8.499 119.521a20.275 20.275 0 0 1 28.744 0l5.744 5.776a20.48 20.48 0 0 1 0 28.866l-74.752 75.05a20.244 20.244 0 0 1-28.733 0l-5.755-5.776a20.48 20.48 0 0 1 0-28.867z"fill="#FFCD00"p-id="2772"></path><path d="M250.235 819.2h645.12s153.6-110.08-20.48-204.8c0 0-14.08-184.32-194.56-184.32 0 0-186.88-26.88-204.8 194.56 0 0-139.49-11.776-143.36 122.88-92.57 0.512-105.595 71.68-81.92 71.68z"fill="#CCDCF5"p-id="2773"></path></svg><svg v-if="state=='yu'"t="1570180981341"class="icon"viewBox="0 0 1024 1024"version="1.1"xmlns="http://www.w3.org/2000/svg"p-id="3019":style="{'width':size+'rem','height':size+'rem'}"><path d="M867.942 559.043H88.781c-28.263-0.154 11.776-136.264 114.688-92.16-3.891-145.286 157.389-123.351 157.389-123.351C382.464 98.242 608.154 128.02 608.154 128.02c218.01 0 235.008 204.166 235.008 204.166 210.227 104.919 24.78 226.857 24.78 226.857z"fill="#CCDCF5"p-id="3020"></path><path d="M295.629 852.47a46.08 46.08 0 0 1-92.16 0c0-24.576 46.08-98.867 46.08-98.867s46.08 74.301 46.08 98.867z m40.96-252.467s40.96 63.682 40.96 84.746a41.062 41.062 0 0 1-81.92 0c0-21.064 40.96-84.746 40.96-84.746z m174.08 252.467a46.08 46.08 0 0 1-92.16 0c0-24.576 46.08-98.867 46.08-98.867s46.08 74.301 46.08 98.867z m40.96-252.467s40.96 63.682 40.96 84.746a41.062 41.062 0 0 1-81.92 0c0-21.064 40.96-84.746 40.96-84.746z m143.36 252.467a46.08 46.08 0 0 1-92.16 0c0-24.576 46.08-98.867 46.08-98.867s46.08 74.301 46.08 98.867z m40.96-252.467s40.96 63.682 40.96 84.746a41.062 41.062 0 0 1-81.92 0c0-21.064 40.96-84.746 40.96-84.746z"fill="#FFCD00"p-id="3021"></path></svg><svg v-if="state=='shachen'"t="1570181015044"class="icon"viewBox="0 0 1024 1024"version="1.1"xmlns="http://www.w3.org/2000/svg"p-id="3267":style="{'width':size+'rem','height':size+'rem'}"><path d="M935.168 542.72c-44.34 78.336-139.848 48.568-61.44 133.12 60.467 65.198-59.392 235.52-389.12 235.52h-81.92s47.104-8.192 174.08-51.2 307.2-188.416 71.68-153.6-307.2 51.2-327.68 20.48 26.624-16.384 92.16-20.48 317.44-51.2 337.92-133.12 10.24-94.208-71.68-71.68-110.592 69.632-266.24 81.92-522.24 22.528-215.04-20.48 489.472-124.928 512-194.56 6.144-131.072-163.84-143.36c0 0 200.704-145.408 368.64 10.24 49.152 77.824-12.288 147.456-40.96 174.08s109.343 48.579 61.44 133.12z"fill="#FFCC00"p-id="3268"></path><path d="M464.128 829.44a30.72 30.72 0 1 1-30.72-30.72 30.72 30.72 0 0 1 30.72 30.72zM505.088 640a25.6 25.6 0 1 1-25.6-25.6 25.6 25.6 0 0 1 25.6 25.6z m-25.6-271.36a35.84 35.84 0 1 1 35.84-35.84 35.84 35.84 0 0 1-35.789 35.84z m0-184.32a35.84 35.84 0 1 1 35.84-35.84 35.84 35.84 0 0 1-35.789 35.84z m-163.84 286.72a35.84 35.84 0 1 1 35.84-35.84 35.84 35.84 0 0 1-35.84 35.84z m-10.24-286.72a35.84 35.84 0 1 1 35.84-35.84 35.84 35.84 0 0 1-35.789 35.84z m-122.88 184.32a35.84 35.84 0 1 1 35.84-35.84 35.84 35.84 0 0 1-35.84 35.84z m56.32 296.96a30.72 30.72 0 1 1-30.72 30.72 30.72 30.72 0 0 1 30.72-30.72z"fill="#CCDCF5"p-id="3269"></path></svg><svg v-if="state=='qing'"t="1570181045608"class="icon"viewBox="0 0 1024 1024"version="1.1"xmlns="http://www.w3.org/2000/svg"p-id="3514":style="{'width':size+'rem','height':size+'rem'}"><path d="M874.854 542.72h-133.12a25.6 25.6 0 0 1-25.6-25.6v-10.24a25.6 25.6 0 0 1 25.6-25.6h133.12a25.6 25.6 0 0 1 25.6 25.6v10.24a25.6 25.6 0 0 1-25.6 25.6z m-169.43-175.514a25.6 25.6 0 0 1-36.21 0l-7.239-7.24a25.6 25.6 0 0 1 0-36.198l94.126-94.136a25.6 25.6 0 0 1 36.209 0l7.209 7.24a25.6 25.6 0 0 1 0 36.208zM517.918 317.44h-10.24a25.6 25.6 0 0 1-25.6-25.6V158.72a25.6 25.6 0 0 1 25.6-25.6h10.24a25.6 25.6 0 0 1 25.6 25.6v133.12a25.6 25.6 0 0 1-25.6 25.6z m-162.192 49.766a25.743 25.743 0 0 1-36.331 0l-94.464-94.126a25.6 25.6 0 0 1 0-36.208l7.27-7.24a25.764 25.764 0 0 1 36.332 0l94.454 94.136a25.528 25.528 0 0 1 0 36.199zM308.623 506.88v10.24a25.6 25.6 0 0 1-25.692 25.6h-133.56a25.6 25.6 0 0 1-25.692-25.6v-10.24a25.6 25.6 0 0 1 25.692-25.6h133.58a25.6 25.6 0 0 1 25.693 25.6z m10.752 149.914a25.743 25.743 0 0 1 36.332 0l7.27 7.24a25.528 25.528 0 0 1 0 36.198l-94.453 94.136a25.764 25.764 0 0 1-36.332 0l-7.27-7.25a25.528 25.528 0 0 1 0-36.198zM507.68 706.56h10.455a25.6 25.6 0 0 1 25.6 25.6v133.12a25.6 25.6 0 0 1-25.6 25.6h-10.455a25.6 25.6 0 0 1-25.6-25.6V732.16a25.6 25.6 0 0 1 25.6-25.6z m162.191-49.766a25.743 25.743 0 0 1 36.332 0l94.464 94.126a25.6 25.6 0 0 1 0 36.198l-7.27 7.25a25.764 25.764 0 0 1-36.332 0L662.6 700.232a25.528 25.528 0 0 1 0-36.199zM359.199 517.12a158.72 158.72 0 1 0 317.44 0 158.72 158.72 0 1 0-317.44 0z"fill="#FFCD00"p-id="3515"></path></svg><svg v-if="state=='wu'"t="1570181076487"class="icon"viewBox="0 0 1024 1024"version="1.1"xmlns="http://www.w3.org/2000/svg"p-id="3761":style="{'width':size+'rem','height':size+'rem'}"><path d="M829.235 809.124h-634.88a30.72 30.72 0 0 1-30.72-30.72v-51.2a30.72 30.72 0 0 1 30.72-30.72h634.88a30.72 30.72 0 0 1 30.72 30.72v51.2a30.72 30.72 0 0 1-30.72 30.72z m0-245.76h-634.88a30.72 30.72 0 0 1-30.72-30.72v-51.2a30.72 30.72 0 0 1 30.72-30.72h634.88a30.72 30.72 0 0 1 30.72 30.72v51.2a30.72 30.72 0 0 1-30.72 30.72z m0-235.52h-634.88a30.72 30.72 0 0 1-30.72-30.72v-51.2a30.72 30.72 0 0 1 30.72-30.72h634.88a30.72 30.72 0 0 1 30.72 30.72v51.2a30.72 30.72 0 0 1-30.72 30.72z"fill="#FFCD00"p-id="3762"></path><path d="M829.235 563.364h-634.88a30.72 30.72 0 0 1-30.72-30.72v-51.2a30.72 30.72 0 0 1 30.72-30.72h634.88a30.72 30.72 0 0 1 30.72 30.72v51.2a30.72 30.72 0 0 1-30.72 30.72z"fill="#CCDCF5"p-id="3763"></path></svg><svg v-if="state=='lei'"t="1570181120233"class="icon"viewBox="0 0 1024 1024"version="1.1"xmlns="http://www.w3.org/2000/svg"p-id="4009":style="{'width':size+'rem','height':size+'rem'}"><path d="M868.076 559.043H88.914c-28.273-0.154 11.776-136.264 114.76-92.16C199.782 321.597 361 343.532 361 343.532 382.648 98.242 608.358 128.02 608.358 128.02c217.98 0 234.978 204.166 234.978 204.166 210.258 104.919 24.74 226.857 24.74 226.857zM285.594 842.23a46.08 46.08 0 0 1-92.16 0c0-24.576 46.08-98.867 46.08-98.867s46.08 74.301 46.08 98.867z m35.84-252.467s46.08 74.301 46.08 98.867a46.08 46.08 0 0 1-92.16 0c0-24.566 46.08-98.867 46.08-98.867z m322.56 262.707a46.08 46.08 0 0 1-92.16 0c0-24.576 46.08-98.867 46.08-98.867s46.08 74.301 46.08 98.867z m40.96-252.467s40.96 68.986 40.96 91.801a40.96 40.96 0 1 1-81.92 0c0-22.815 40.96-91.801 40.96-91.801z"fill="#CCDCF5"p-id="4010"></path><path d="M643.994 241.603l-102.4 235.52 92.16-10.24-204.8 276.48 102.4-215.04-102.4-10.24z"fill="#FFCD00"p-id="4011"></path></svg><svg v-if="state=='yin'"t="1570181627204"class="icon"viewBox="0 0 1024 1024"version="1.1"xmlns="http://www.w3.org/2000/svg"p-id="971":style="{'width':size+'rem','height':size+'rem'}"><path d="M80.763 789.924h779.161s185.519-162.58-24.73-302.48c0 0-17.008-272.22-234.987-272.22 0 0-225.71-39.7-247.357 287.345 0 0-168.469-17.408-173.148 181.483-111.81 0.768-127.54 105.872-98.94 105.872z"fill="#FFFFFF"p-id="972"></path><path d="M101.243 810.404h779.161s185.519-162.58-24.73-302.48c0 0-17.008-272.22-234.987-272.22 0 0-225.71-39.7-247.357 287.345 0 0-168.469-17.408-173.148 181.494-111.81 0.757-127.54 105.86-98.94 105.86z"fill="#ccdcf5"p-id="973"></path></svg></lable>`
});

/**
 * 文件图标插件
 */
Vue.component('fileIcon', {
    props: {row: {type: Object}, size: {type: Number, default: .6}},
    data: {ossUrl: appConf.getMicsUrl('/oss').then(res => this.ossUrl = res)},
    template: `<lable@click="onClick()"><img v-if="row.ext=='jpg'||row.ext=='png'||row.ext=='gif'||row.ext=='bmp'":src="[''+ossUrl+'/file/show/'+row.md5+'/160/100?isShow=true']":style="{'height':size+0.03+'rem'}"/><img v-if="row.ext=='pptx'||row.ext=='ppt'"src="/ui/foxUI/theme/icon/ppt.png":style="{'width':size+'rem','height':size+0.03+'rem'}"/><img v-if="row.ext=='txt'"src="/ui/foxUI/theme/icon/txt.png":style="{'width':size+'rem','height':size+0.03+'rem'}"/><img v-if="row.ext=='xls'||row.ext=='xlsx'"src="/ui/foxUI/theme/icon/xls.png":style="{'width':size+'rem','height':size+0.03+'rem'}"/><img v-if="row.ext=='doc'||row.ext=='docx'"src="/ui/foxUI/theme/icon/doc.png":style="{'width':size+'rem','height':size+0.03+'rem'}"/><img v-if="row.ext=='pdf'"src="/ui/foxUI/theme/icon/pdf.png":style="{'width':size+'rem','height':size+0.03+'rem'}"/><img v-if="row.ext=='mp3'||row.ext=='wav'"src="/ui/foxUI/theme/icon/mp3.png":style="{'width':size+'rem','height':size+0.03+'rem'}"/><img v-if="row.ext=='mp4'"src="/ui/foxUI/theme/icon/mp4.png":style="{'width':size+'rem','height':size+0.03+'rem'}"/></lable>`,
    methods: {
        onClick() {
            this.$emit('click')
        }
    }
});

/**
 * 滑动滚动插件
 */
Vue.component("carousel", {
    props: {
        data: {
            type: Object, default: function () {
                return []
            }
        }, pagination_factor: {type: Number, default: 200}, window_size: {type: Number, default: 3}
    },
    template: `<div class="card-carousel-wrapper"><div class="card-carousel--nav__left" @click="moveCarousel(-1)" :disabled="atHeadOfList"></div><div class="card-carousel"><div class="card-carousel--overflow-container" ref="carousel_container"><div class="card-carousel-cards" :style="{ transform: 'translateX' + '(' + currentOffset + 'px' + ')'}"><div class="card-carousel--card" v-for="item in data"><slot :row="item"></slot></div></div></div></div><div class="card-carousel--nav__right" @click="moveCarousel(1)" :disabled="atEndOfList"></div></div>`,
    data() {
        return {currentOffset: 0}
    },
    computed: {
        atEndOfList() {
            return this.currentOffset <= ((this.pagination_factor * -1) * (this.data.length - this.window_size))
        }, atHeadOfList() {
            return this.currentOffset >= 0
        }
    },
    methods: {
        moveCarousel(direction) {
            if (direction === 1 && !this.atEndOfList) {
                this.currentOffset -= this.pagination_factor
            } else if (direction === -1 && !this.atHeadOfList) {
                this.currentOffset += this.pagination_factor
            }
        },
    }
});

/**
 * 图标选择器
 */
Vue.component('iconSelect', {
    props: {
        id: {type: String, default: ''},
        value: {type: String, default: ''},
        size: {type: String, default: ''},
        callback: {
            type: Function, default: function () {
            }
        }
    },
    data: function () {
        return {
            iconStr: '',
            listObj: [],
            iconLists: ["oa-icon-geren", "oa-icon-renli", "oa-icon-zhishi", "oa-icon-shezhi", "oa-icon-xingzheng", "oa-icon-sanjiaoxing", "oa-icon-guanbi", "oa-icon-cangku", "oa-icon-xiaoxi", "oa-icon-xinxiang", "oa-icon-yiwen", "oa-icon-shangwu", "oa-icon-xinxiang2", "oa-icon-xinxiangmu", "oa-icon-jianguan", "oa-icon-yin", "oa-icon-lei", "oa-icon-wu", "oa-icon-qing", "oa-icon-shachen", "oa-icon-yu", "oa-icon-yun", "oa-icon-bingbao", "oa-icon-xue", "el-icon-delete-solid", "el-icon-delete", "el-icon-s-tools", "el-icon-setting", "el-icon-user-solid", "el-icon-user", "el-icon-phone", "el-icon-phone-outline", "el-icon-more", "el-icon-more-outline", "el-icon-star-on", "el-icon-star-off", "el-icon-s-goods", "el-icon-goods", "el-icon-warning", "el-icon-warning-outline", "el-icon-question", "el-icon-info", "el-icon-remove", "el-icon-circle-plus", "el-icon-success", "el-icon-error", "el-icon-zoom-in", "el-icon-zoom-out", "el-icon-remove-outline", "el-icon-circle-plus-outline", "el-icon-circle-check", "el-icon-circle-close", "el-icon-s-help", "el-icon-help", "el-icon-minus", "el-icon-plus", "el-icon-check", "el-icon-close", "el-icon-picture", "el-icon-picture-outline", "el-icon-picture-outline-round", "el-icon-upload", "el-icon-upload2", "el-icon-download", "el-icon-camera-solid", "el-icon-camera", "el-icon-video-camera-solid", "el-icon-video-camera", "el-icon-message-solid", "el-icon-bell", "el-icon-s-cooperation", "el-icon-s-order", "el-icon-s-platform", "el-icon-s-fold", "el-icon-s-unfold", "el-icon-s-operation", "el-icon-s-promotion", "el-icon-s-home", "el-icon-s-release", "el-icon-s-ticket", "el-icon-s-management", "el-icon-s-open", "el-icon-s-shop", "el-icon-s-marketing", "el-icon-s-flag", "el-icon-s-comment", "el-icon-s-finance", "el-icon-s-claim", "el-icon-s-custom", "el-icon-s-opportunity", "el-icon-s-data", "el-icon-s-check", "el-icon-s-grid", "el-icon-menu", "el-icon-share", "el-icon-d-caret", "el-icon-caret-left", "el-icon-caret-right", "el-icon-caret-bottom", "el-icon-caret-top", "el-icon-bottom-left", "el-icon-bottom-right", "el-icon-back", "el-icon-right", "el-icon-bottom", "el-icon-top", "el-icon-top-left", "el-icon-top-right", "el-icon-arrow-left", "el-icon-arrow-right", "el-icon-arrow-down", "el-icon-arrow-up", "el-icon-d-arrow-left", "el-icon-d-arrow-right", "el-icon-video-pause", "el-icon-video-play", "el-icon-refresh", "el-icon-refresh-right", "el-icon-refresh-left", "el-icon-finished", "el-icon-sort", "el-icon-sort-up", "el-icon-sort-down", "el-icon-rank", "el-icon-loading", "el-icon-view", "el-icon-c-scale-to-original", "el-icon-date", "el-icon-edit", "el-icon-edit-outline", "el-icon-folder", "el-icon-folder-opened", "el-icon-folder-add", "el-icon-folder-remove", "el-icon-folder-delete", "el-icon-folder-checked", "el-icon-tickets", "el-icon-document-remove", "el-icon-document-delete", "el-icon-document-copy", "el-icon-document-checked", "el-icon-document", "el-icon-document-add", "el-icon-printer", "el-icon-paperclip", "el-icon-takeaway-box", "el-icon-search", "el-icon-monitor", "el-icon-attract", "el-icon-mobile", "el-icon-scissors", "el-icon-umbrella", "el-icon-headset", "el-icon-brush", "el-icon-mouse", "el-icon-coordinate", "el-icon-magic-stick", "el-icon-reading", "el-icon-data-line", "el-icon-data-board", "el-icon-pie-chart", "el-icon-data-analysis", "el-icon-collection-tag", "el-icon-film", "el-icon-suitcase", "el-icon-suitcase-1", "el-icon-receiving", "el-icon-collection", "el-icon-files", "el-icon-notebook-1", "el-icon-notebook-2", "el-icon-toilet-paper", "el-icon-office-building", "el-icon-school", "el-icon-table-lamp", "el-icon-house", "el-icon-no-smoking", "el-icon-smoking", "el-icon-shopping-cart-full", "el-icon-shopping-cart-1", "el-icon-shopping-cart-2", "el-icon-shopping-bag-1", "el-icon-shopping-bag-2", "el-icon-sold-out", "el-icon-sell", "el-icon-present", "el-icon-box", "el-icon-bank-card", "el-icon-money", "el-icon-coin", "el-icon-wallet", "el-icon-discount", "el-icon-price-tag", "el-icon-news", "el-icon-guide", "el-icon-male", "el-icon-female", "el-icon-thumb", "el-icon-cpu", "el-icon-link", "el-icon-connection", "el-icon-open", "el-icon-turn-off", "el-icon-set-up", "el-icon-chat-round", "el-icon-chat-line-round", "el-icon-chat-square", "el-icon-chat-dot-round", "el-icon-chat-dot-square", "el-icon-chat-line-square", "el-icon-message", "el-icon-postcard", "el-icon-position", "el-icon-turn-off-microphone", "el-icon-microphone", "el-icon-close-notification", "el-icon-bangzhu", "el-icon-time", "el-icon-odometer", "el-icon-crop", "el-icon-aim", "el-icon-switch-button", "el-icon-full-screen", "el-icon-copy-document", "el-icon-mic", "el-icon-stopwatch", "el-icon-medal-1", "el-icon-medal", "el-icon-trophy", "el-icon-trophy-1", "el-icon-first-aid-kit", "el-icon-discover", "el-icon-place", "el-icon-location", "el-icon-location-outline", "el-icon-location-information", "el-icon-add-location", "el-icon-delete-location", "el-icon-map-location", "el-icon-alarm-clock", "el-icon-timer", "el-icon-watch-1", "el-icon-watch", "el-icon-lock", "el-icon-unlock", "el-icon-key", "el-icon-service", "el-icon-mobile-phone", "el-icon-bicycle", "el-icon-truck", "el-icon-ship", "el-icon-basketball", "el-icon-football", "el-icon-soccer", "el-icon-baseball", "el-icon-wind-power", "el-icon-light-rain", "el-icon-lightning", "el-icon-heavy-rain", "el-icon-sunrise", "el-icon-sunrise-1", "el-icon-sunset", "el-icon-sunny", "el-icon-cloudy", "el-icon-partly-cloudy", "el-icon-cloudy-and-sunny", "el-icon-moon", "el-icon-moon-night", "el-icon-dish", "el-icon-dish-1", "el-icon-food", "el-icon-chicken", "el-icon-fork-spoon", "el-icon-knife-fork", "el-icon-burger", "el-icon-tableware", "el-icon-sugar", "el-icon-dessert", "el-icon-ice-cream", "el-icon-hot-water", "el-icon-water-cup", "el-icon-coffee-cup", "el-icon-cold-drink", "el-icon-goblet", "el-icon-goblet-full", "el-icon-goblet-square", "el-icon-goblet-square-full", "el-icon-refrigerator", "el-icon-grape", "el-icon-watermelon", "el-icon-cherry", "el-icon-apple", "el-icon-pear", "el-icon-orange", "el-icon-coffee", "el-icon-ice-tea", "el-icon-ice-drink", "el-icon-milk-tea", "el-icon-potato-strips", "el-icon-lollipop", "el-icon-ice-cream-square", "el-icon-ice-cream-round"],
        }
    },
    mounted() {
        let that = this;
        that.iconLists.forEach((item) => {
            that.listObj.push(that.$createElement('i', {
                style: 'font-size: .25rem;cursor: pointer; line-height: .3rem; ' + (that.value == item ? 'color: red' : ''),
                class: item,
                on: {"click": that.selectIcon}
            }, null));
        });
    },
    template: `<el-button @click="onClick" :size="size"><slot :value="value"></slot></el-button>`,
    methods: {
        onClick() {
            let that = this;
            that.$msgbox({
                title: '图标选择器',
                message: that.$createElement('div', {style: 'width:5.5rem;'}, that.listObj),
                showCancelButton: true,
                showConfirmButton: true
            }).then(() => {
                that.$emit('input', that.iconStr);
                that.$emit('callback', {id: that.id, logo: that.iconStr});
            })
        },
        selectIcon(val) {
            let that = this;
            that.iconStr = val.target.className;
            that.listObj.forEach(item => {
                item.elm.style.color = val.target.className == item.elm.className ? 'red' : '';
            });
        }
    }
});

/**
 * 任务条
 */
Vue.component('scheduler', {
    props: ['id', 'config'],
    template: '<div :id="id"></div>',
    mounted: function () {
        this.control = new DayPilot.Scheduler(this.id, this.config).init();
    }
});

/**
 * 水印组件
 */
Vue.component('waterMark', {
    name: 'waterMark',
    render(createElement) {
        return createElement(this.tagName)
    },
    props: {
        tagName: {type: String, default: 'canvas'},
        waterText: {type: String, default: '湖南汇富康达健康管理有限公司'},
        fontSize: {type: String, default: '16'},
        waterAngle: {type: String, default: '20'},
        waterAlpha: {type: String, default: '0.2'},
        waterColor: {type: String, default: '#ffffff'},
        imageUrl: {type: String, default: 'http://app.qhmanager.com/fox/dbfile/show/8770e6aced9a03d9a4c27edfdbd5efed'},
    },
    data() {
        return {ctx: null}
    },
    mounted() {
        let that = this;
        that.ctx = that.$el.getContext("2d");
        that.loadImg();
    },
    watch: {
        imageUrl: {
            handler(val, oldVal) {
                let that = this;
                that.loadImg();
            }
        },
    },
    methods: {
        loadImg() {
            let that = this;
            if (that.imageUrl.indexOf('null') != -1) {
                console.log('清理画布');
                that.ctx.clearRect(0, 0, that.$el.width, that.$el.height);
            } else {
                let image = new Image();
                image.setAttribute("crossOrigin", 'Anonymous');
                image.src = that.imageUrl;
                image.onload = function () {
                    that.$el.width = image.width;
                    that.$el.height = image.height;
                    that.ctx.drawImage(image, 0, 0);
                    that.printWater();
                };
            }
        },
        printWater() {
            let that = this;
            //获取水印属性
            that.ctx.fillStyle = that.waterColor; //颜色
            that.ctx.globalAlpha = that.waterAlpha; //透明度
            that.ctx.font = `${that.fontSize}px Microsoft YaHei`; //字体
            let angle = that.waterAngle * Math.PI / 180; //旋转角度
            //获取画布大小
            let cvsHeight = parseInt(that.$el.height * 1.4);
            let cvsWidth = parseInt(that.$el.width * 1.4);
            let xGap = parseInt(that.fontSize * that.waterText.length * 1.2);
            let yGap = parseInt(that.fontSize * 3);
            //密铺水印
            that.ctx.rotate(angle);
            let x, y, c = 0;
            for (x = -cvsWidth; x <= cvsWidth; x += (xGap)) {
                c++;
                for (y = -cvsHeight; y <= cvsHeight; y += (yGap)) {
                    c++;
                    if (c % 2 == 0) {
                        that.ctx.fillText(that.waterText, x, y);
                    }
                }
            }
            that.ctx.rotate(-angle);
        }
    }
});

/**
 * 工牌组件
 */
Vue.component('workCard', {
    name: 'workCard',
    render(createElement) {
        return createElement(this.tagName)
    },
    props: {
        tagName: {type: String, default: 'canvas'},
        userInfo: {
            type: Object, default: {
                img: 'http://app.qhmanager.com/fox/dbfile/show/6bea66baf8fbef5b41f72b28fc1edc8e',
                name: '樊晓艳',
                jobnum: 'QH00555',
                newDeptArrOne: 'IT信息中心',
                newDeptArrFour: 'OA项目组',
                position_name: '程序员鼓励师'
            }
        },
    },
    data() {
        return {ctx: null}
    },
    watch: {
        userInfo: {
            handler(val, oldVal) {
                let that = this;
                that.draw();
            }
        },
    },
    mounted() {
        let that = this;
        let front = true;
        that.ctx = that.$el.getContext("2d");
        that.$el.width = 800; // 设置生成图片容器的宽高
        that.$el.height = 1168;
        that.$el.addEventListener('mousedown', function (_) {
            if (front) {
                that.ctx.clearRect(0, 0, that.$el.width, that.$el.height);
                that.ctx.fillStyle = '#ffffff';
                that.ctx.fillRect(0, 0, that.$el.width, that.$el.height);
                that.drawImage(0, 0, that.$el.width, that.$el.height, '/ui/oa2/images/workCard/bg.svg');
                front = false;
            }
        });
        that.$el.addEventListener('mouseup', function (_) {
            if (!front) {
                that.draw();
                front = true;
            }
        });
        that.draw();
    },
    methods: {
        draw() {
            let that = this;
            let ctx = this.ctx;
            ctx.clearRect(0, 0, that.$el.width, that.$el.height); // 设置背景颜色
            ctx.fillStyle = '#ffffff';
            ctx.fillRect(0, 0, that.$el.width, that.$el.height);
            if (!that.$el.getContext) return;
            let img = new Image();
            img.crossOrigin = "*";
            img.onload = function () {
                let r = 34;
                let x = 245;
                let y = 210;
                let w = 280;
                let h = 280;
                that.drawRoundRect(r, x, y, w, h, img)
            };
            img.src = that.userInfo.img;
            //左上角logo
            that.drawImage(57, 82, 255, 78, '/ui/oa2/images/workCard/logo.svg');
            //名字下横条
            that.drawImage(268, 629, 252, 10, '/ui/oa2/images/workCard/file.svg');
            //网址
            that.drawImage(222, 1079, 330, 25, '/ui/oa2/images/workCard/file1.svg');
            //左下角图标
            that.drawImage(-410, 995, 600, 500, '/ui/oa2/images/workCard/file2.svg');
            //右边图标
            that.drawImage(710, 60, 150, 700, '/ui/oa2/images/workCard/file3.svg');
            //文字绘制
            that.drawText(that.userInfo.name, 390, 610, 'bold 70px 微软雅黑', '#4e504f', 'center');
            that.drawText('NO:' + that.userInfo.jobnum, 390, 680, '20px 微软雅黑', '#4e504f', 'center');
            that.drawText(that.userInfo.newDeptArrOne, 390, 870, 'bold 50px 微软雅黑', '#4e504f', 'center');
            that.drawText(that.userInfo.newDeptArrFour, 370, 930, 'bold 30px 微软雅黑', '#4e504f', 'right');
            that.drawText(that.userInfo.position_name, 410, 930, 'bold 30px 微软雅黑', '#4e504f', 'left');
            ctx.beginPath();
            ctx.strokeStyle = "#ada6a6";
            ctx.fillStyle = '#ada6a6';
            ctx.rect(390, 896, 3, 30);
            ctx.fill();
            ctx.stroke()
        },
        drawText(text, x, y, font, color, textAlign) {
            let ctx = this.ctx;
            ctx.save();
            ctx.font = font;
            ctx.fillStyle = color;
            ctx.textAlign = textAlign;
            ctx.textBaseline = 'ideographic';
            ctx.letterSpacing = '15px';
            ctx.fillText(text, x, y);
        },
        drawImage(x, y, w, h, url) {
            let ctx = this.ctx;
            ctx.save();
            let img = new Image();
            img.onload = function () {
                ctx.drawImage(img, x, y, w, h)
            };
            img.src = url
        },
        coverImg(box_w, box_h, source_w, source_h) {
            let sx = 0,
                sy = 0,
                sWidth = source_w,
                sHeight = source_h;
            if (source_w > source_h || (source_w == source_h && box_w < box_h)) {
                sWidth = box_w * sHeight / box_h;
                sx = (source_w - sWidth) / 2;
            } else if (source_w < source_h || (source_w == source_h && box_w > box_h)) {
                sHeight = box_h * sWidth / box_w;
                sy = (source_h - sHeight) / 2;
            }
            return {
                sx,
                sy,
                sWidth,
                sHeight
            }
        },
        drawRoundRect(r, x, y, w, h, img) {
            let ctx = this.ctx;
            ctx.save();
            if (w < 2 * r) r = w / 2;
            if (h < 2 * r) r = h / 2;
            ctx.beginPath();
            ctx.moveTo(x + r, y);
            ctx.arcTo(x + w, y, x + w, y + h, r);
            ctx.arcTo(x + w, y + h, x, y + h, r);
            ctx.arcTo(x, y + h, x, y, r);
            ctx.arcTo(x, y, x + w, y, r);
            ctx.closePath();
            ctx.clip();
            ctx.fillStyle = '#efefef';
            ctx.fill();
            let imgRect = this.coverImg(w, h, img.width, img.height);
            ctx.drawImage(img, imgRect.sx, imgRect.sy, imgRect.sWidth, imgRect.sHeight, x, y, w, h);
            ctx.restore()
        }
    }
});