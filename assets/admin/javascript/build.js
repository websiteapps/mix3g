function buildChart(){
	var id = "aa29e7e2175b4e369f76109407385604";
	var gId = "72222103";
	oo.setOOId(id);
	oo.load(function()
	{
		var pie = new oo.Pie(gId,new Date("04/08/2013"), new Date());
		pie.setDimension('ga:visitorType');
		pie.setMetric('ga:visits', 'Visitors'); 
		pie.draw('pie');
	});

	oo.setOOId(id);
	oo.load(function()
	{
		var tl = new oo.Timeline(gId, new Date("04/08/2013"), new Date());
		tl.addMetric('ga:visitors', 'Visits');
		tl.addMetric('ga:bounces', 'Bounces');
		tl.setOption('colors', ['red', 'orange', 'yellow', 'green']);
		tl.setOption('title', 'Timeline');
		tl.draw('timeline');
	});

	oo.setOOId(id);
	oo.load(function()
	{
		var metric = new oo.Metric(gId, new Date("04/08/2013"), new Date());
		metric.setMetric('ga:visitors');
		metric.draw('data1');
	});

    oo.setOOId(id);
    oo.load(function()
    {
        var metric = new oo.Metric(gId, new Date("04/08/2013"), new Date());
        metric.setMetric('ga:pageviews');
        metric.draw('data2');
    });

    oo.setOOId(id);
    oo.load(function()
    {
        var metric = new oo.Metric(gId, new Date("04/08/2013"), new Date());
        metric.setMetric('ga:bounces');
        metric.draw('data3');
    });



	oo.setOOId(id);
	oo.load(function()
	{
		var table = new oo.Table(gId, new Date("04/08/2011"), new Date());
		table.addDimension('ga:city', 'City');
		table.addMetric('ga:visits', 'Visits');
		table.addMetric('ga:newVisits', 'New Visits');
		  
		table.setOption('page', 'enable');
		table.setOption('pageSize', 10);
		table.draw('table');
	});

}