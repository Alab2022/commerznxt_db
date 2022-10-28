<?php include('common/head.php'); ?>
<?php include('common/header.php'); ?>
<div class="container-fluid remove-margin bg-white">
  <div class="db-top-wrapper">
    <div class="left">
      <h4>My Sales Analysis</h4>
      <ul class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">My Sales Analysis</a></li>
      </ul>
    </div>
    <div class="right">
      <button class="btn btn-primary"><i class="bi bi-file-earmark-arrow-up-fill"></i> Export to CSV</button>
    </div>
  </div>
</div>

<ul class="nav nav-tabs page-nav" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="ecomsale-tab" data-bs-toggle="tab" data-bs-target="#ecomsale" type="button" role="tab" aria-controls="home" aria-selected="true">
    <i class="bi bi-bag-check-fill"></i> eCommerce Sales</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="dirsale-tab" data-bs-toggle="tab" data-bs-target="#dirsale" type="button" role="tab" aria-controls="profile" aria-selected="false">
    <i class="bi bi-geo-alt-fill"></i> Direct Sales</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="indsale-tab" data-bs-toggle="tab" data-bs-target="#indsale" type="button" role="tab" aria-controls="contact" aria-selected="false">
    <i class="bi bi-person-fill"></i> Independent Sales Rep</button>
  </li>
</ul>

<div class="tab-content tab-page" id="myTabContent">
  <div class="tab-pane fade show active" id="ecomsale" role="tabpanel" aria-labelledby="ecomsale-tab">
    <div class="page-inner">
<div class="row">
      <div class="col-md-4">
        <div class="card sticky">
          <div class="card-body">
            <!-- Sales Chart -->
                <h5>Sales 2021 - 2022</h5>
                <div id="chartcon"></div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
      <div class="card">
          <div class="card-body">
            <div class="db-top-wrapper-sub">
          <h5>Ecommerce Sales</h5>
          <div><button type="button" class="btn btn-primary ms-2 filter-bg" data-bs-toggle="offcanvas" data-bs-target="#ecomfilter" aria-controls="offcanvasRight">
            <i class="bi bi-funnel-fill"></i></button></div>
          </div>
<table id="table-sparkline">
  <thead>
    <tr>
      <th>Name</th>
      <th>Income 2021</th>
      <th>Income per qtr.</th>
      <th>Income 2022</th>
      <th>Costs per qtr.</th>
      <th>Difference</th>
      <th>Result per qtr.</th>
    </tr>
  </thead>
  <tbody id="tbody-sparkline">
    <tr>
      <th>Alabama</th>
      <td>254</td>
      <td data-sparkline="71, 78, 39, 66 ">
      </td><td>296</td>
      <td data-sparkline="68, 52, 80, 96 ">
      </td><td>-42</td>
      <td data-sparkline="3, 26, -41, -30 ; column">
    </td></tr>
    <tr>
      <th>Alaska</th>
      <td>246</td>
      <td data-sparkline="87, 44, 74, 41 ">
      </td><td>181</td>
      <td data-sparkline="29, 54, 73, 25 ">
      </td><td>65</td>
      <td data-sparkline="58, -10, 1, 16 ; column">
    </td></tr>
    <tr>
      <th>Arizona</th>
      <td>101</td>
      <td data-sparkline="56, 12, 8, 25 ">
      </td><td>191</td>
      <td data-sparkline="69, 14, 53, 55 ">
      </td><td>-90</td>
      <td data-sparkline="-13, -2, -45, -30 ; column">
    </td></tr>
    <tr>
      <th>Arkansas</th>
      <td>303</td>
      <td data-sparkline="81, 50, 78, 94 ">
      </td><td>76</td>
      <td data-sparkline="36, 15, 14, 11 ">
      </td><td>227</td>
      <td data-sparkline="45, 35, 64, 83 ; column">
    </td></tr>
    <tr>
      <th>California</th>
      <td>200</td>
      <td data-sparkline="61, 80, 10, 49 ">
      </td><td>217</td>
      <td data-sparkline="100, 8, 52, 57 ">
      </td><td>-17</td>
      <td data-sparkline="-39, 72, -42, -8 ; column">
    </td></tr>
    <tr>
      <th>Colorado</th>
      <td>118</td>
      <td data-sparkline="13, 48, 21, 36 ">
      </td><td>273</td>
      <td data-sparkline="98, 86, 8, 81 ">
      </td><td>-155</td>
      <td data-sparkline="-85, -38, 13, -45 ; column">
    </td></tr>
    <tr>
      <th>Connecticut</th>
      <td>201</td>
      <td data-sparkline="6, 64, 44, 87 ">
      </td><td>148</td>
      <td data-sparkline="60, 13, 73, 2 ">
      </td><td>53</td>
      <td data-sparkline="-54, 51, -29, 85 ; column">
    </td></tr>
    <tr>
      <th>Delaware</th>
      <td>161</td>
      <td data-sparkline="7, 27, 49, 78 ">
      </td><td>298</td>
      <td data-sparkline="19, 90, 100, 89 ">
      </td><td>-137</td>
      <td data-sparkline="-12, -63, -51, -11 ; column">
    </td></tr>
    <tr>
      <th>District of Columbia</th>
      <td>106</td>
      <td data-sparkline="18, 39, 27, 22 ">
      </td><td>185</td>
      <td data-sparkline="62, 97, 24, 2 ">
      </td><td>-79</td>
      <td data-sparkline="-44, -58, 3, 20 ; column">
    </td></tr>
    <tr>
      <th>Florida</th>
      <td>249</td>
      <td data-sparkline="51, 24, 90, 84 ">
      </td><td>244</td>
      <td data-sparkline="47, 40, 74, 83 ">
      </td><td>5</td>
      <td data-sparkline="4, -16, 16, 1 ; column">
    </td></tr>
    <tr>
      <th>Georgia</th>
      <td>183</td>
      <td data-sparkline="36, 80, 39, 28 ">
      </td><td>212</td>
      <td data-sparkline="43, 25, 52, 92 ">
      </td><td>-29</td>
      <td data-sparkline="-7, 55, -13, -64 ; column">
    </td></tr>
    <tr>
      <th>Hawaii</th>
      <td>232</td>
      <td data-sparkline="73, 34, 74, 51 ">
      </td><td>172</td>
      <td data-sparkline="1, 83, 49, 39 ">
      </td><td>60</td>
      <td data-sparkline="72, -49, 25, 12 ; column">
    </td></tr>
    <tr>
      <th>Idaho</th>
      <td>166</td>
      <td data-sparkline="25, 43, 31, 67 ">
      </td><td>152</td>
      <td data-sparkline="30, 30, 75, 17 ">
      </td><td>14</td>
      <td data-sparkline="-5, 13, -44, 50 ; column">
    </td></tr>
    <tr>
      <th>Illinois</th>
      <td>336</td>
      <td data-sparkline="56, 84, 98, 98 ">
      </td><td>151</td>
      <td data-sparkline="61, 12, 77, 1 ">
      </td><td>185</td>
      <td data-sparkline="-5, 72, 21, 97 ; column">
    </td></tr>
    <tr>
      <th>Indiana</th>
      <td>216</td>
      <td data-sparkline="52, 87, 64, 13 ">
      </td><td>216</td>
      <td data-sparkline="2, 47, 94, 73 ">
      </td><td>0</td>
      <td data-sparkline="50, 40, -30, -60 ; column">
    </td></tr>
    <tr>
      <th>Iowa</th>
      <td>135</td>
      <td data-sparkline="41, 45, 19, 30 ">
      </td><td>159</td>
      <td data-sparkline="17, 34, 45, 63 ">
      </td><td>-24</td>
      <td data-sparkline="24, 11, -26, -33 ; column">
    </td></tr>
    <tr>
      <th>Kansas</th>
      <td>184</td>
      <td data-sparkline="52, 43, 65, 24 ">
      </td><td>215</td>
      <td data-sparkline="20, 42, 97, 56 ">
      </td><td>-31</td>
      <td data-sparkline="32, 1, -32, -32 ; column">
    </td></tr>
    <tr>
      <th>Kentucky</th>
      <td>289</td>
      <td data-sparkline="85, 74, 98, 32 ">
      </td><td>219</td>
      <td data-sparkline="37, 38, 93, 51 ">
      </td><td>70</td>
      <td data-sparkline="48, 36, 5, -19 ; column">
    </td></tr>
    <tr>
      <th>Louisiana</th>
      <td>257</td>
      <td data-sparkline="89, 18, 87, 63 ">
      </td><td>201</td>
      <td data-sparkline="19, 54, 35, 93 ">
      </td><td>56</td>
      <td data-sparkline="70, -36, 52, -30 ; column">
    </td></tr>
    <tr>
      <th>Maine</th>
      <td>194</td>
      <td data-sparkline="17, 68, 61, 48 ">
      </td><td>133</td>
      <td data-sparkline="44, 35, 42, 12 ">
      </td><td>61</td>
      <td data-sparkline="-27, 33, 19, 36 ; column">
    </td></tr>
    <tr>
      <th>Maryland</th>
      <td>204</td>
      <td data-sparkline="74, 12, 74, 44 ">
      </td><td>157</td>
      <td data-sparkline="65, 58, 22, 12 ">
      </td><td>47</td>
      <td data-sparkline="9, -46, 52, 32 ; column">
    </td></tr>
    <tr>
      <th>Massachusetts</th>
      <td>172</td>
      <td data-sparkline="44, 35, 69, 24 ">
      </td><td>115</td>
      <td data-sparkline="26, 3, 69, 17 ">
      </td><td>57</td>
      <td data-sparkline="18, 32, 0, 7 ; column">
    </td></tr>
    <tr>
      <th>Michigan</th>
      <td>177</td>
      <td data-sparkline="99, 26, 13, 39 ">
      </td><td>185</td>
      <td data-sparkline="20, 37, 99, 29 ">
      </td><td>-8</td>
      <td data-sparkline="79, -11, -86, 10 ; column">
    </td></tr>
    <tr>
      <th>Minnesota</th>
      <td>99</td>
      <td data-sparkline="34, 30, 16, 19 ">
      </td><td>137</td>
      <td data-sparkline="49, 43, 24, 21 ">
      </td><td>-38</td>
      <td data-sparkline="-15, -13, -8, -2 ; column">
    </td></tr>
    <tr>
      <th>Mississippi</th>
      <td>205</td>
      <td data-sparkline="38, 75, 31, 61 ">
      </td><td>179</td>
      <td data-sparkline="0, 68, 100, 11 ">
      </td><td>26</td>
      <td data-sparkline="38, 7, -69, 50 ; column">
    </td></tr>
    <tr>
      <th>Missouri</th>
      <td>135</td>
      <td data-sparkline="37, 48, 2, 48 ">
      </td><td>202</td>
      <td data-sparkline="41, 64, 17, 80 ">
      </td><td>-67</td>
      <td data-sparkline="-4, -16, -15, -32 ; column">
    </td></tr>
    <tr>
      <th>Montana</th>
      <td>195</td>
      <td data-sparkline="48, 81, 38, 28 ">
      </td><td>237</td>
      <td data-sparkline="44, 33, 86, 74 ">
      </td><td>-42</td>
      <td data-sparkline="4, 48, -48, -46 ; column">
    </td></tr>
    <tr>
      <th>Nebraska</th>
      <td>286</td>
      <td data-sparkline="98, 55, 82, 51 ">
      </td><td>232</td>
      <td data-sparkline="89, 54, 28, 61 ">
      </td><td>54</td>
      <td data-sparkline="9, 1, 54, -10 ; column">
    </td></tr>
    <tr>
      <th>Nevada</th>
      <td>221</td>
      <td data-sparkline="66, 4, 57, 94 ">
      </td><td>214</td>
      <td data-sparkline="59, 39, 94, 22 ">
      </td><td>7</td>
      <td data-sparkline="7, -35, -37, 72 ; column">
    </td></tr>
    <tr>
      <th>New Hampshire</th>
      <td>136</td>
      <td data-sparkline="32, 21, 1, 82 ">
      </td><td>306</td>
      <td data-sparkline="88, 85, 65, 68 ">
      </td><td>-170</td>
      <td data-sparkline="-56, -64, -64, 14 ; column">
    </td></tr>
    <tr>
      <th>New Jersey</th>
      <td>194</td>
      <td data-sparkline="31, 40, 24, 99 ">
      </td><td>147</td>
      <td data-sparkline="7, 45, 12, 83 ">
      </td><td>47</td>
      <td data-sparkline="24, -5, 12, 16 ; column">
    </td></tr>
    <tr>
      <th>New Mexico</th>
      <td>207</td>
      <td data-sparkline="66, 93, 18, 30 ">
      </td><td>261</td>
      <td data-sparkline="97, 28, 79, 57 ">
      </td><td>-54</td>
      <td data-sparkline="-31, 65, -61, -27 ; column">
    </td></tr>
    <tr>
      <th>New York</th>
      <td>316</td>
      <td data-sparkline="48, 95, 76, 97 ">
      </td><td>193</td>
      <td data-sparkline="68, 5, 97, 23 ">
      </td><td>123</td>
      <td data-sparkline="-20, 90, -21, 74 ; column">
    </td></tr>
    <tr>
      <th>North Carolina</th>
      <td>175</td>
      <td data-sparkline="31, 71, 2, 71 ">
      </td><td>188</td>
      <td data-sparkline="93, 5, 81, 9 ">
      </td><td>-13</td>
      <td data-sparkline="-62, 66, -79, 62 ; column">
    </td></tr>
    <tr>
      <th>North Dakota</th>
      <td>181</td>
      <td data-sparkline="3, 90, 62, 26 ">
      </td><td>288</td>
      <td data-sparkline="70, 63, 82, 73 ">
      </td><td>-107</td>
      <td data-sparkline="-67, 27, -20, -47 ; column">
    </td></tr>
    <tr>
      <th>Ohio</th>
      <td>189</td>
      <td data-sparkline="70, 50, 6, 63 ">
      </td><td>163</td>
      <td data-sparkline="21, 94, 4, 44 ">
      </td><td>26</td>
      <td data-sparkline="49, -44, 2, 19 ; column">
    </td></tr>
    <tr>
      <th>Oklahoma</th>
      <td>188</td>
      <td data-sparkline="66, 46, 53, 23 ">
      </td><td>172</td>
      <td data-sparkline="26, 25, 35, 86 ">
      </td><td>16</td>
      <td data-sparkline="40, 21, 18, -63 ; column">
    </td></tr>
    <tr>
      <th>Oregon</th>
      <td>165</td>
      <td data-sparkline="82, 31, 38, 14 ">
      </td><td>257</td>
      <td data-sparkline="91, 9, 80, 77 ">
      </td><td>-92</td>
      <td data-sparkline="-9, 22, -42, -63 ; column">
    </td></tr>
    <tr>
      <th>Pennsylvania</th>
      <td>268</td>
      <td data-sparkline="33, 88, 82, 65 ">
      </td><td>129</td>
      <td data-sparkline="30, 29, 41, 29 ">
      </td><td>139</td>
      <td data-sparkline="3, 59, 41, 36 ; column">
    </td></tr>
    <tr>
      <th>Rhode Island</th>
      <td>164</td>
      <td data-sparkline="8, 86, 32, 38 ">
      </td><td>182</td>
      <td data-sparkline="88, 8, 18, 68 ">
      </td><td>-18</td>
      <td data-sparkline="-80, 78, 14, -30 ; column">
    </td></tr>
    <tr>
      <th>South Carolina</th>
      <td>91</td>
      <td data-sparkline="24, 18, 0, 49 ">
      </td><td>193</td>
      <td data-sparkline="72, 62, 21, 38 ">
      </td><td>-102</td>
      <td data-sparkline="-48, -44, -21, 11 ; column">
    </td></tr>
    <tr>
      <th>South Dakota</th>
      <td>184</td>
      <td data-sparkline="73, 17, 64, 30 ">
      </td><td>221</td>
      <td data-sparkline="21, 91, 57, 52 ">
      </td><td>-37</td>
      <td data-sparkline="52, -74, 7, -22 ; column">
    </td></tr>
    <tr>
      <th>Tennessee</th>
      <td>233</td>
      <td data-sparkline="92, 24, 25, 92 ">
      </td><td>131</td>
      <td data-sparkline="5, 18, 42, 66 ">
      </td><td>102</td>
      <td data-sparkline="87, 6, -17, 26 ; column">
    </td></tr>
    <tr>
      <th>Texas</th>
      <td>211</td>
      <td data-sparkline="33, 80, 68, 30 ">
      </td><td>225</td>
      <td data-sparkline="86, 58, 36, 45 ">
      </td><td>-14</td>
      <td data-sparkline="-53, 22, 32, -15 ; column">
    </td></tr>
    <tr>
      <th>Utah</th>
      <td>362</td>
      <td data-sparkline="89, 98, 96, 79 ">
      </td><td>225</td>
      <td data-sparkline="35, 51, 88, 51 ">
      </td><td>137</td>
      <td data-sparkline="54, 47, 8, 28 ; column">
    </td></tr>
    <tr>
      <th>Vermont</th>
      <td>119</td>
      <td data-sparkline="4, 19, 56, 40 ">
      </td><td>152</td>
      <td data-sparkline="17, 66, 27, 42 ">
      </td><td>-33</td>
      <td data-sparkline="-13, -47, 29, -2 ; column">
    </td></tr>
    <tr>
      <th>Virginia</th>
      <td>127</td>
      <td data-sparkline="24, 27, 41, 35 ">
      </td><td>71</td>
      <td data-sparkline="30, 2, 36, 3 ">
      </td><td>56</td>
      <td data-sparkline="-6, 25, 5, 32 ; column">
    </td></tr>
    <tr>
      <th>Washington</th>
      <td>165</td>
      <td data-sparkline="40, 11, 63, 51 ">
      </td><td>245</td>
      <td data-sparkline="46, 41, 94, 64 ">
      </td><td>-80</td>
      <td data-sparkline="-6, -30, -31, -13 ; column">
    </td></tr>
    <tr>
      <th>West Virginia</th>
      <td>248</td>
      <td data-sparkline="66, 56, 97, 29 ">
      </td><td>171</td>
      <td data-sparkline="65, 53, 37, 16 ">
      </td><td>77</td>
      <td data-sparkline="1, 3, 60, 13 ; column">
    </td></tr>
    <tr>
      <th>Wisconsin</th>
      <td>183</td>
      <td data-sparkline="24, 55, 21, 83 ">
      </td><td>224</td>
      <td data-sparkline="80, 64, 13, 67 ">
      </td><td>-41</td>
      <td data-sparkline="-56, -9, 8, 16 ; column">
    </td></tr>
    <tr>
      <th>Wyoming</th>
      <td>231</td>
      <td data-sparkline="52, 49, 97, 33 ">
      </td><td>251</td>
      <td data-sparkline="96, 50, 23, 82 ">
      </td><td>-20</td>
      <td data-sparkline="-44, -1, 74, -49 ; column">
    </td></tr>
  </tbody>
</table>
          </div>
      </div>
      </div>
</div>


</div></div>
  <div class="tab-pane fade show " id="dirsale" role="tabpane2" aria-labelledby="dirsale-tab">dirsale</div>
  <div class="tab-pane fade show " id="indsale" role="tabpane3" aria-labelledby="indsale-tab">indsale</div>
</div>
<!-- Ecom filter offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="ecomfilter" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Filter By</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
       

        <div class="accordion" id="accordionExample">
          
          <div class="accordion-item">
            

              <div class="accordion-body">
                
                <div class="form-group">
                  <label for="">Status</label>
                  <div class="dropdown">
                    <span><i class="bi bi-chevron-down"></i></span>
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                
                
                
                  <div class="form-group">
                    <label for="">Geography</label>
                    <div class="dropdown">
                      <span><i class="bi bi-chevron-down"></i></span>
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Brand
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Channel</label>
                    <div class="dropdown">
                      <span><i class="bi bi-chevron-down"></i></span>
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Out of Stock
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col">
                  
        <label for="exampleFormControlTextarea1">Target Date</label>
		<div class="input-group date" id="datepicker">
        <input type="text" class="form-control shadow-cs" id="date"/>
        <span class="input-group-append shadow-cs ">
          <span class="input-group-text bg-light d-block dp_icon">
		  <i class="bi bi-calendar-week-fill"></i>
          </span>
        </span>
      </div>
                  
        </div>
                
              </div>
          
          </div>

        </div>
      </div>
        <div class="offcanvas-footer fil-pd">
        <button type="button" class="btn btn-secondary sec-custom">Clear</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#ecomfilter" aria-controls="offcanvasRight">Apply</button>
      </div>
      </div>

<?php include('common/footer.php'); ?>