
<!DOCTYPE html>
<html id="jsbin" lang="en" class="">
<head>
  <meta charset=utf-8>
  <title>JS Bin - Collaborative JavaScript Debugging</title>
  <link rel="icon" href="http://live.datatables.net/images/favicon.png">
  <link rel="stylesheet" href="http://live.datatables.net/css/style.css?3.17.11">
  <link rel="stylesheet" href="http://live.datatables.net/css/flat-ui.css?3.17.11">
  
  <!--[if lte IE 9 ]><link rel="stylesheet" href="http://live.datatables.net/css/ie.css?3.17.11"><![endif]-->
  
  
  
  
  <meta property="og:url" content="http://live.datatables.net/jaxecidu/1/edit" />
  <meta property="og:title" content="JS Bin" />
  <meta property="og:description" content="Sample of the bin: " />
  
  <meta property="og:image" content="http://live.datatables.net/images/logo.png" />
</head>
<!--[if lt IE 7]>  <body class="source ie ie6"> <![endif]-->
<!--[if IE 7]>     <body class="source ie ie7"> <![endif]-->
<!--[if gt IE 7]>  <body class="source ie">     <![endif]-->
<!--[if !IE]><!--> <body class="source public">    <!--<![endif]-->

<script>
if(top != self) {
  window.location = 'http://live.datatables.net/jaxecidu/1/embed';
  document.write('<' + '!--');
}
</script>

  
<div id="bin" class="stretch" style="opacity: 0; filter:alpha(opacity=0);">
  <div id="source" class="binview stretch">
  </div>
  <div id="panelswaiting">
    <div class="code stretch html panel">
      
      <div class="editbox">
        <textarea spellcheck="false" autocapitalize="none" autocorrect="off" id="html"></textarea>
      </div>
    </div>
    <div class="code stretch javascript panel">
      <div class="label menu"><span class="name"><strong><a  class="fake-dropdown button-dropdown" href="#javascriptprocessors">JavaScript</a></strong></span>
        <div class="dropdown" id="javascriptprocessors">
          <div class="dropdownmenu processorSelector" data-type="javascript">
            <a href="#javascript">JavaScript</a>
            <a href="#coffeescript">CoffeeScript</a>
            <a href="#jsx">JSX (React)</a>
            <a href="#livescript">LiveScript</a>
            <a href="#processing">Processing</a>
            <a href="#traceur">Traceur</a>
            <a href="#typescript">TypeScript</a>
            <a href="#convert">Convert to JavaScript</a>
          </div>
        </div>
      </div>
      <div class="editbox">
        <textarea spellcheck="false" autocapitalize="none" autocorrect="off" id="javascript"></textarea>
      </div>
    </div>
    <div class="code stretch css panel">
      <div class="label menu"><span class="name"><strong><a class="fake-dropdown button-dropdown" href="#cssprocessors">CSS</a></strong></span>
        <div class="dropdown" id="cssprocessors">
          <div class="dropdownmenu processorSelector" data-type="css">
            <a href="#css">CSS</a>
            <a href="#less">Less</a>
            <a href="#myth">Myth</a>
            
            <a href="#sass" data-label="Sass">Sass <span class="small">with Compass</span></a>
            <a href="#scss" data-label="SCSS">SCSS <span class="small">with Compass</span></a>
            
            <a href="#stylus">Stylus</a>
            <a href="#convert">Convert to CSS</a>
          </div>
        </div>
      </div>
      <div class="editbox">
        <textarea spellcheck="false" autocapitalize="none" autocorrect="off" id="css"></textarea>
      </div>
    </div>
    <div class="stretch console panel">
      <div class="label">
        <span class="name"><strong>Console</strong></span>
        <span class="options">
          <button id="runconsole" title="ctrl + enter">Run</button>
          <button id="clearconsole" title="ctrl + l">Clear</button>
        </span>
      </div>
      <div id="console" class="stretch"><ul id="output"></ul><form>
          <textarea id="exec" spellcheck="false" autocapitalize="none" rows="1" autocorrect="off"></textarea>
      </form></div>
    </div>
    <div id="live" class="stretch live panel">
      <div class="label">
        <span class="name"><strong>Output</strong></span>
        <span class="options">
          <button id="runwithalerts" title="ctrl + enter
Include alerts, prompts &amp; confirm boxes">Run with JS</button>
          <label>Auto-run JS<input type="checkbox" id="enablejs"></label>
          <a target="_blank" title="Live preview" id="jsbinurl" class="" href="/jaxecidu/1"><img src="http://live.datatables.net/images/popout.png"></a>
        </span>
        <span class="size"></span>
      </div>
    </div>
  </div>
  
  <form id="saveform" method="post" action="/jaxecidu/1/save">
    <input type="hidden" name="method">
    <input type="hidden" name="_csrf" value="M2DfWjfKQt2Lx8cC2AIWopBQ">
  </form>
  
</div>
<div id="tip" class=" notification">
  <p>
    
    You can jump to the latest bin by adding <code>/latest</code> to your URL
  </p>
  <a class="dismiss" href="#">Dismiss x</a>
</div>
<div id="keyboardHelp" class="modal">
  <div>
    <h2>Keyboard Shortcuts</h2>
    <table>
      <thead>
        <tr>
          <th class="shortcut">Shortcut</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>ctrl + [num]</td>
          <td>Toggle nth panel</td>
        </tr>
        <tr>
          <td colspan="2">
            <small>
              <input type="checkbox" id="enablealt" class="enablealt">
              <label for="enablealt">Require alt key, leaving cmd+1, 2 etc for tab switching.</label>
            </small>
          </td>
        </tr>
        <tr>
          <td>ctrl + 0</td>
          <td>Close focused panel</td>
        </tr>
        <tr>
          <td>ctrl + enter</td>
          <td>Re-render output.<br>If console visible: run JS in console</td>
        </tr>
        <tr>
          <td>Ctrl + l</td>
          <td>Clear the console</td>
        </tr>
        <tr>
          <td>ctrl + /</td>
          <td>Toggle comment on selected lines</td>
        </tr>
        <tr>
          <td>ctrl + [</td>
          <td>Indents selected lines</td>
        </tr>
        <tr>
          <td>ctrl + ]</td>
          <td>Unindents selected lines</td>
        </tr>
        <tr>
          <td>tab</td>
          <td>Code complete &amp; <a href="http://docs.emmet.io/" target="_blank">Emmet</a> expand</td>
        </tr>
        <tr>
          <td>ctrl + s</td>
          <td>Save &amp; lock current Bin from further changes</td>
        </tr>
        <tr>
          <td>ctrl + shift + s</td>
          <td>Clone Bin</td>
        </tr>
        <tr>
          <td>ctrl + y</td>
          <td>Archive Bin</td>
        </tr>
        <tr><td colspan="2"><small><br><a href="/help/keyboard-shortcuts" target="_blank">Complete list of JS Bin shortcuts</a></small></td></tr>
      </tbody>
    </table>
  </div>
</div>
<div id="urlHelp" class="modal">
  <div>
    <h2>JS Bin URLs</h2>
    <table>
      <thead>
        <tr>
          <th class="shortcut">URL</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>/</td>
          <td>Show the full rendered output.<br><small>This content will update in real time as it's updated from the /edit url.</small></td>
        </tr>
        <tr>
          <td>/edit</td>
          <td>Edit the current bin</td>
        </tr>
        <tr>
          <td>/watch</td>
          <td>Follow a Code Casting session</td>
        </tr>
        <tr>
          <td>/embed</td>
          <td>Create an embeddable version of the bin</td>
        </tr>
        <tr>
          <td>/latest</td>
          <td>Load the very latest bin (/latest goes in place of the revision)</td>
        </tr>
        <tr>
          <td>/[username]/last</td>
          <td>View the last edited bin for this user</td>
        </tr>
        <tr>
          <td>/[username]/last/edit</td>
          <td>Edit the last edited bin for this user</td>
        </tr>
        <tr>
          <td>/[username]/last/watch</td>
          <td>Follow the Code Casting session for the latest bin for this user</td>
        </tr>
        <tr>
          <td>/quiet</td>
          <td>Remove analytics and edit button from rendered output</td>
        </tr>
        <tr>
          <td>.js</td>
          <td>Load only the JavaScript for a bin</td>
        </tr>
        <tr>
          <td>.css</td>
          <td>Load only the CSS for a bin</td>
        </tr>
        <tr><td colspan="2"><br><small>Except for username prefixed urls, the url may start with http://jsbin.com/abc and the url fragments can be added to the url to view it differently.</small></td></tr>
      </tbody>
    </table>
  </div>
</div>


<div hidden>
  <div class="card" id="infocard">
    <header><img>
      <div class="visibility"></div>
      <div class="meta">
        <div class="author">Bin info</div>
        <div class="name"><b></b><span class="pro">pro</span></div><span class="when"><canvas></canvas><time></time></span>
      </div>
      <div class="viewers"><b>0</b><span>viewers</span></div>
    </header>
    <div class="body">
      <ul>
        <li><a href="/clone">Clone</a> </li>
        <li><a class="startingpoint" href="/save-as-template">Save as template</a> </li>
        <li><a class="export-as-gist" href="#export-gist">Export gist</a> </li>
        <li class="owner"><a href="/download">Download</a> </li>
        
        <li class="owner"><a class="deletebin" href="/delete">Delete</a></li>
        
      </ul>
    </div>
  </div>
</div>


<!--[if lte IE 8]>
<script src="http://live.datatables.net/js/vendor/jshint/jshint.old.min.js"></script>
<![endif]-->
<script src="http://live.datatables.net/js/vendor/jquery-1.11.0.min.js"></script>

<script src="http://live.datatables.net/js/prod/jsbin-3.17.11.min.js"></script>
<script>
  start({"html":"<!DOCTYPE html>\n<html>\n  <head>\n    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/jszip-3.1.3/pdfmake-0.1.27/dt-1.10.15/b-1.3.1/b-colvis-1.3.1/b-flash-1.3.1/b-html5-1.3.1/b-print-1.3.1/cr-1.3.3/fc-3.2.2/fh-3.1.2/kt-2.2.1/r-2.1.1/rg-1.0.0/rr-1.2.0/sc-1.4.2/se-1.2.2/datatables.min.css\"/>\n\n    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/jszip-3.1.3/pdfmake-0.1.27/dt-1.10.15/b-1.3.1/b-colvis-1.3.1/b-flash-1.3.1/b-html5-1.3.1/b-print-1.3.1/cr-1.3.3/fc-3.2.2/fh-3.1.2/kt-2.2.1/r-2.1.1/rg-1.0.0/rr-1.2.0/sc-1.4.2/se-1.2.2/datatables.min.js\"><\/script>\n\n        \n    <meta charset=utf-8 />\n    <title>DataTables - JS Bin</title>\n  </head>\n  <body>\n    <div class=\"container\">\n      <table id=\"example\" class=\"display nowrap\" width=\"100%\">\n        <thead>\n          <tr>\n            <th>Name</th>\n            <th>Position</th>\n            <th>Office</th>\n            <th>Age</th>\n            <th>Start date</th>\n            <th>Salary</th>\n          </tr>\n        </thead>\n\n        <tfoot>\n          <tr>\n            <th>Name</th>\n            <th>Position</th>\n            <th>Office</th>\n            <th>Age</th>\n            <th>Start date</th>\n            <th>Salary</th>\n          </tr>\n        </tfoot>\n\n        <tbody>\n          <tr>\n            <td>Tiger Nixon</td>\n            <td>System Architect</td>\n            <td>Edinburgh</td>\n            <td>61</td>\n            <td>2011/04/25</td>\n            <td>$3,120</td>\n          </tr>\n          <tr>\n            <td>Garrett Winters</td>\n            <td>Director</td>\n            <td>Edinburgh</td>\n            <td>63</td>\n            <td>2011/07/25</td>\n            <td>$5,300</td>\n          </tr>\n          <tr>\n            <td>Ashton Cox</td>\n            <td>Technical Author</td>\n            <td>San Francisco</td>\n            <td>66</td>\n            <td>2009/01/12</td>\n            <td>$4,800</td>\n          </tr>\n          <tr>\n            <td>Cedric Kelly</td>\n            <td>Javascript Developer</td>\n            <td>Edinburgh</td>\n            <td>22</td>\n            <td>2012/03/29</td>\n            <td>$3,600</td>\n          </tr>\n          <tr>\n            <td>Jenna Elliott</td>\n            <td>Financial Controller</td>\n            <td>Edinburgh</td>\n            <td>33</td>\n            <td>2008/11/28</td>\n            <td>$5,300</td>\n          </tr>\n          <tr>\n            <td>Brielle Williamson</td>\n            <td>Integration Specialist</td>\n            <td>New York</td>\n            <td>61</td>\n            <td>2012/12/02</td>\n            <td>$4,525</td>\n          </tr>\n          <tr>\n            <td>Herrod Chandler</td>\n            <td>Sales Assistant</td>\n            <td>San Francisco</td>\n            <td>59</td>\n            <td>2012/08/06</td>\n            <td>$4,080</td>\n          </tr>\n          <tr>\n            <td>Rhona Davidson</td>\n            <td>Integration Specialist</td>\n            <td>Edinburgh</td>\n            <td>55</td>\n            <td>2010/10/14</td>\n            <td>$6,730</td>\n          </tr>\n          <tr>\n            <td>Colleen Hurst</td>\n            <td>Javascript Developer</td>\n            <td>San Francisco</td>\n            <td>39</td>\n            <td>2009/09/15</td>\n            <td>$5,000</td>\n          </tr>\n          <tr>\n            <td>Sonya Frost</td>\n            <td>Software Engineer</td>\n            <td>Edinburgh</td>\n            <td>23</td>\n            <td>2008/12/13</td>\n            <td>$3,600</td>\n          </tr>\n          <tr>\n            <td>Jena Gaines</td>\n            <td>System Architect</td>\n            <td>London</td>\n            <td>30</td>\n            <td>2008/12/19</td>\n            <td>$5,000</td>\n          </tr>\n          <tr>\n            <td>Quinn Flynn</td>\n            <td>Financial Controller</td>\n            <td>Edinburgh</td>\n            <td>22</td>\n            <td>2013/03/03</td>\n            <td>$4,200</td>\n          </tr>\n          <tr>\n            <td>Charde Marshall</td>\n            <td>Regional Director</td>\n            <td>San Francisco</td>\n            <td>36</td>\n            <td>2008/10/16</td>\n            <td>$5,300</td>\n          </tr>\n          <tr>\n            <td>Haley Kennedy</td>\n            <td>Senior Marketing Designer</td>\n            <td>London</td>\n            <td>43</td>\n            <td>2012/12/18</td>\n            <td>$4,800</td>\n          </tr>\n          <tr>\n            <td>Tatyana Fitzpatrick</td>\n            <td>Regional Director</td>\n            <td>London</td>\n            <td>19</td>\n            <td>2010/03/17</td>\n            <td>$2,875</td>\n          </tr>\n          <tr>\n            <td>Michael Silva</td>\n            <td>Senior Marketing Designer</td>\n            <td>London</td>\n            <td>66</td>\n            <td>2012/11/27</td>\n            <td>$3,750</td>\n          </tr>\n          <tr>\n            <td>Paul Byrd</td>\n            <td>Javascript Developer</td>\n            <td>New York</td>\n            <td>64</td>\n            <td>2010/06/09</td>\n            <td>$5,000</td>\n          </tr>\n          <tr>\n            <td>Gloria Little</td>\n            <td>Systems Administrator</td>\n            <td>New York</td>\n            <td>59</td>\n            <td>2009/04/10</td>\n            <td>$3,120</td>\n          </tr>\n          <tr>\n            <td>Bradley Greer</td>\n            <td>Software Engineer</td>\n            <td>London</td>\n            <td>41</td>\n            <td>2012/10/13</td>\n            <td>$3,120</td>\n          </tr>\n          <tr>\n            <td>Dai Rios</td>\n            <td>System Architect</td>\n            <td>Edinburgh</td>\n            <td>35</td>\n            <td>2012/09/26</td>\n            <td>$4,200</td>\n          </tr>\n          <tr>\n            <td>Jenette Caldwell</td>\n            <td>Financial Controller</td>\n            <td>New York</td>\n            <td>30</td>\n            <td>2011/09/03</td>\n            <td>$4,965</td>\n          </tr>\n          <tr>\n            <td>Yuri Berry</td>\n            <td>System Architect</td>\n            <td>New York</td>\n            <td>40</td>\n            <td>2009/06/25</td>\n            <td>$3,600</td>\n          </tr>\n          <tr>\n            <td>Caesar Vance</td>\n            <td>Technical Author</td>\n            <td>New York</td>\n            <td>21</td>\n            <td>2011/12/12</td>\n            <td>$4,965</td>\n          </tr>\n          <tr>\n            <td>Doris Wilder</td>\n            <td>Sales Assistant</td>\n            <td>Edinburgh</td>\n            <td>23</td>\n            <td>2010/09/20</td>\n            <td>$4,965</td>\n          </tr>\n          <tr>\n            <td>Angelica Ramos</td>\n            <td>System Architect</td>\n            <td>London</td>\n            <td>36</td>\n            <td>2009/10/09</td>\n            <td>$2,875</td>\n          </tr>\n          <tr>\n            <td>Gavin Joyce</td>\n            <td>Developer</td>\n            <td>Edinburgh</td>\n            <td>42</td>\n            <td>2010/12/22</td>\n            <td>$4,525</td>\n          </tr>\n          <tr>\n            <td>Jennifer Chang</td>\n            <td>Regional Director</td>\n            <td>London</td>\n            <td>28</td>\n            <td>2010/11/14</td>\n            <td>$4,080</td>\n          </tr>\n          <tr>\n            <td>Brenden Wagner</td>\n            <td>Software Engineer</td>\n            <td>San Francisco</td>\n            <td>18</td>\n            <td>2011/06/07</td>\n            <td>$3,750</td>\n          </tr>\n          <tr>\n            <td>Ebony Grimes</td>\n            <td>Software Engineer</td>\n            <td>San Francisco</td>\n            <td>48</td>\n            <td>2010/03/11</td>\n            <td>$2,875</td>\n          </tr>\n          <tr>\n            <td>Russell Chavez</td>\n            <td>Director</td>\n            <td>Edinburgh</td>\n            <td>20</td>\n            <td>2011/08/14</td>\n            <td>$3,600</td>\n          </tr>\n          <tr>\n            <td>Michelle House</td>\n            <td>Integration Specialist</td>\n            <td>Edinburgh</td>\n            <td>37</td>\n            <td>2011/06/02</td>\n            <td>$3,750</td>\n          </tr>\n          <tr>\n            <td>Suki Burks</td>\n            <td>Developer</td>\n            <td>London</td>\n            <td>53</td>\n            <td>2009/10/22</td>\n            <td>$2,875</td>\n          </tr>\n          <tr>\n            <td>Prescott Bartlett</td>\n            <td>Technical Author</td>\n            <td>London</td>\n            <td>27</td>\n            <td>2011/05/07</td>\n            <td>$6,730</td>\n          </tr>\n          <tr>\n            <td>Gavin Cortez</td>\n            <td>Technical Author</td>\n            <td>San Francisco</td>\n            <td>22</td>\n            <td>2008/10/26</td>\n            <td>$6,730</td>\n          </tr>\n          <tr>\n            <td>Martena Mccray</td>\n            <td>Integration Specialist</td>\n            <td>Edinburgh</td>\n            <td>46</td>\n            <td>2011/03/09</td>\n            <td>$4,080</td>\n          </tr>\n          <tr>\n            <td>Unity Butler</td>\n            <td>Senior Marketing Designer</td>\n            <td>San Francisco</td>\n            <td>47</td>\n            <td>2009/12/09</td>\n            <td>$3,750</td>\n          </tr>\n          <tr>\n            <td>Howard Hatfield</td>\n            <td>Financial Controller</td>\n            <td>San Francisco</td>\n            <td>51</td>\n            <td>2008/12/16</td>\n            <td>$4,080</td>\n          </tr>\n          <tr>\n            <td>Hope Fuentes</td>\n            <td>Financial Controller</td>\n            <td>San Francisco</td>\n            <td>41</td>\n            <td>2010/02/12</td>\n            <td>$4,200</td>\n          </tr>\n          <tr>\n            <td>Vivian Harrell</td>\n            <td>System Architect</td>\n            <td>San Francisco</td>\n            <td>62</td>\n            <td>2009/02/14</td>\n            <td>$4,965</td>\n          </tr>\n          <tr>\n            <td>Timothy Mooney</td>\n            <td>Financial Controller</td>\n            <td>London</td>\n            <td>37</td>\n            <td>2008/12/11</td>\n            <td>$4,200</td>\n          </tr>\n          <tr>\n            <td>Jackson Bradshaw</td>\n            <td>Director</td>\n            <td>New York</td>\n            <td>65</td>\n            <td>2008/09/26</td>\n            <td>$5,000</td>\n          </tr>\n          <tr>\n            <td>Miriam Weiss</td>\n            <td>Support Engineer</td>\n            <td>Edinburgh</td>\n            <td>64</td>\n            <td>2011/02/03</td>\n            <td>$4,965</td>\n          </tr>\n          <tr>\n            <td>Bruno Nash</td>\n            <td>Software Engineer</td>\n            <td>London</td>\n            <td>38</td>\n            <td>2011/05/03</td>\n            <td>$4,200</td>\n          </tr>\n          <tr>\n            <td>Odessa Jackson</td>\n            <td>Support Engineer</td>\n            <td>Edinburgh</td>\n            <td>37</td>\n            <td>2009/08/19</td>\n            <td>$3,600</td>\n          </tr>\n          <tr>\n            <td>Thor Walton</td>\n            <td>Developer</td>\n            <td>New York</td>\n            <td>61</td>\n            <td>2013/08/11</td>\n            <td>$3,600</td>\n          </tr>\n          <tr>\n            <td>Finn Camacho</td>\n            <td>Support Engineer</td>\n            <td>San Francisco</td>\n            <td>47</td>\n            <td>2009/07/07</td>\n            <td>$4,800</td>\n          </tr>\n          <tr>\n            <td>Elton Baldwin</td>\n            <td>Data Coordinator</td>\n            <td>Edinburgh</td>\n            <td>64</td>\n            <td>2012/04/09</td>\n            <td>$6,730</td>\n          </tr>\n          <tr>\n            <td>Zenaida Frank</td>\n            <td>Software Engineer</td>\n            <td>New York</td>\n            <td>63</td>\n            <td>2010/01/04</td>\n            <td>$4,800</td>\n          </tr>\n          <tr>\n            <td>Zorita Serrano</td>\n            <td>Software Engineer</td>\n            <td>San Francisco</td>\n            <td>56</td>\n            <td>2012/06/01</td>\n            <td>$5,300</td>\n          </tr>\n          <tr>\n            <td>Jennifer Acosta</td>\n            <td>Javascript Developer</td>\n            <td>Edinburgh</td>\n            <td>43</td>\n            <td>2013/02/01</td>\n            <td>$2,875</td>\n          </tr>\n          <tr>\n            <td>Cara Stevens</td>\n            <td>Sales Assistant</td>\n            <td>New York</td>\n            <td>46</td>\n            <td>2011/12/06</td>\n            <td>$4,800</td>\n          </tr>\n          <tr>\n            <td>Hermione Butler</td>\n            <td>Director</td>\n            <td>London</td>\n            <td>47</td>\n            <td>2011/03/21</td>\n            <td>$4,080</td>\n          </tr>\n          <tr>\n            <td>Lael Greer</td>\n            <td>Systems Administrator</td>\n            <td>London</td>\n            <td>21</td>\n            <td>2009/02/27</td>\n            <td>$3,120</td>\n          </tr>\n          <tr>\n            <td>Jonas Alexander</td>\n            <td>Developer</td>\n            <td>San Francisco</td>\n            <td>30</td>\n            <td>2010/07/14</td>\n            <td>$5,300</td>\n          </tr>\n          <tr>\n            <td>Shad Decker</td>\n            <td>Regional Director</td>\n            <td>Edinburgh</td>\n            <td>51</td>\n            <td>2008/11/13</td>\n            <td>$5,300</td>\n          </tr>\n          <tr>\n            <td>Michael Bruce</td>\n            <td>Javascript Developer</td>\n            <td>Edinburgh</td>\n            <td>29</td>\n            <td>2011/06/27</td>\n            <td>$4,080</td>\n          </tr>\n          <tr>\n            <td>Donna Snider</td>\n            <td>System Architect</td>\n            <td>New York</td>\n            <td>27</td>\n            <td>2011/01/25</td>\n            <td>$3,120</td>\n          </tr>\n        </tbody>\n      </table>\n    </div>\n  </body>\n</html>","css":"body {\r\n  font: 90%/1.45em \"Helvetica Neue\", HelveticaNeue, Verdana, Arial, Helvetica, sans-serif;\r\n  margin: 0;\r\n  padding: 0;\r\n  color: #333;\r\n  background-color: #fff;\r\n}\r\n","javascript":"$(document).ready( function () {\n    var table = $('#example').DataTable({\n        select: true,\n        responsive: {\n            details: {\n                type: 'column',\n                target: 'tr', //THIS WORKS GREAT IN RESPONSIVE VIEW\n                display: $.fn.dataTable.Responsive.display.modal( {\n                    header: function ( row ) {\n                        var data = row.data();\n                        return 'Details for '+data[0]+' '+data[1];\n                    }\n                }),\n                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {\n                    tableClass: 'table'\n                })\n            }\n        }\n    }).on( 'select', function ( e, dt, type, indexes ) {\n        //if not responsive view launch responsive modal\n    });\n});\n","url":"http://live.datatables.net/jaxecidu"}, {"root":"http://live.datatables.net","shareRoot":"http://live.datatables.net","runner":"http://live.datatables.net/runner","static":"http://live.datatables.net","version":"3.17.11","state":{"token":"M2DfWjfKQt2Lx8cC2AIWopBQ","stream":false,"streaming":false,"code":"jaxecidu","revision":1,"processors":{},"checksum":null,"metadata":{"name":"anonymous","visibility":"public","last_updated":"2017-06-26T07:09:45.152Z"}},"settings":{"panels":["html","javascript","css","live"]},"user":{"settings":{}}}, this, document);
</script>


</body>
</html>

