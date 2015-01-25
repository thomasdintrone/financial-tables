<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Financial Tables</title>
<meta name="robots" content="noindex,nofollow">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- FINANCIAL TABLE CSS -->
<link href="css/financialTable.css" type="text/css" rel="stylesheet">

<style type="text/css">
body { font-family:Arial, Helvetica, sans-serif; }
</style>
</head>

<body>

<div class="tableWrap">
	<table id="table1">
		<thead>
			<tr>
      			<th class="tableHeader" align="left">Statement of Operations Data</th>
   				<th colspan="5" align="center" class="borderB1">Year Ended December 31,</th>
 			</tr>
		</thead>
		<tbody>
  			<tr class="borderB2 years">
      			<td class="left noH">(in thousands, except per share information)</td>
   				<td>2014</td>
   				<td>2013</td>
   				<td>2012</td>
        		<td>2011</td>
        		<td>2010</td>
 			</tr>
   			<tr>
    			<td>Revenues</td>
    			<td>$2,124,221</td>
				<td>$4,712,870</td>
  				<td>$2,793,133</td>
				<td>$1,133,922</td>
     			<td>$4,133,099</td>
   			</tr>
			<tr>
				<td>Cost of goods sold</td>
				<td>3,234,333</td>
   				<td>4,380,099</td>
				<td>2,114,555</td>
  				<td>2,212,532</td>
  				<td>5,221,455</td>
			</tr>
			<tr>
  				<td>Gross profit</td>
				<td>313,654</td>
				<td>12,771</td>
   				<td>343,366</td>
                <td>111,997</td>
                <td>56,089</td>
            </tr>
            <tr>
                <td>Selling, general and adminstrative expenses</td>
                <td>(27,867)</td>
                <td>(74,576)</td>
                <td>(43,665)</td>
                <td>(27,241)</td>
                <td>(19,012)</td>
             </tr>
             <tr>
          		<td>Gain on disposal of assets<sup>(1)</sup></td>
          		<td>&mdash;</td>
            	<td>34,999	</td>
         	 	<td>&mdash;</td>
              	<td>&mdash;</td>
          		<td>&mdash;</td>
        	</tr>
     		<tr>
            	<td>Operating income</td>
             	<td>188,444</td>
             	<td>97,756</td>
         		<td>35,989</td>
          		<td>65,567</td>
        		<td>22,334</td>
        	</tr>
           	<tr>
          		<td>Total other expense</td>
              	<td>(26,798)</td>
        		<td>(72,078)</td>
            	<td>(47,472)</td>
             	<td>(22,442)</td>
           		<td>(98,946)</td>
          	</tr>
  			<tr>
          		<td>Net income</td>
             	<td>53,006</td>
           		<td>75,455</td>
          		<td>22,089</td>
             	<td>83,660</td>
        		<td>19,754</td>
      		</tr>
      		<tr>
           		<td>Net income attributable to Widget Corp</td>
            	<td>42,845</td>
        	 	<td>75,745</td>
           		<td>25,475</td>
            	<td>33,745</td>
             	<td>11,543</td>
        	</tr>
  			<tr class="spaceT">
            	<td>Earnings per share attributable to Widget Corp:</td>
           		<td>10%</td>
             	<td>22%</td>
               	<td>14%</td>
             	<td>9%</td>
         		<td>28%</td>
   			</tr>
 			<tr>
          		<td><span class="indent1">Basic</span></td>
         		<td>$1.47</td>
         		<td>$1.84</td>
          		<td>$0.77</td>
          		<td>$0.53</td>
         		<td>$1.95</td>
      		</tr>
  			<tr class="spaceB">
           		<td><span class="indent1">Diluted</span></td>
           		<td>$0.58</td>
         		<td>$1.44</td>
        		<td>$2.52</td>
          		<td>$1.98</td>
        		<td>$0.35</td>
    		</tr>
  			<tr>
           		<td class="tableHeader">Other Data</td>
         		<td></td>
           		<td></td>
          		<td></td>
         		<td></td>
         		<td></td>
 			</tr>
  			<tr class="borderB2">
          		<td>EBITDA (unaudited and in thousands)<sup>(2)</sup></td>
       			<td>$263,486</td>
          		<td>$221,345</td>
     			<td>$155,622</td>
          		<td>$111,280</td>
            	<td>$67,658</td>
      		</tr>
		</tbody>
		<tfoot>
                     
		</tfoot>
	</table>
</div><!-- END .tableWrap -->

</body>
<!-- JAVASCRIPT -->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<!-- SELECTIVZR -->
<!-- Allows for CSS3 pseudo selectors || Reference: http://selectivizr.com -->
<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="js/selectivizr/selectivizr-min.js"></script>
  <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
<![endif]--> 

<!-- FINANCIAL TABLES JS -->
<script src="js/jquery.financialTable.js"></script>
<script type="text/javascript">
$(function(){
	setTable('#table1', { 
			// Set Variables:
			'dollarPosition':[14, 14, 14, 14, 14], 
			'currentYear': 2, 
			'textColor': '#5A5D3F',
			'firstColWidth': '400px',
		} 
	);
});
</script>
</html>