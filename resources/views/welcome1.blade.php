<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

    <div class="row mt-4 ml-2 mr-2">
        <div class="col-md-6" style="text-align: center">
            <h3>Position Book</h3>
            <ul id="positionBook">

            </ul>

        </div>
        <div class="col-md-6" style="text-align: center">
            <h3>Order Book</h3>
            <ul id="orderBook">

            </ul>
        </div>
    </div>
    <script src="{{asset('js/jquery-3.4.1.min.js')  }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <script type="text/javascript">

        var oldPositionRecord = {};
        var newPositionRecord = {};

        var oldOrderRecord = {};
        var newOrderRecord = {};

        var currency = ['EUR_USD','USD_JPY','GBP_USD','AUD_USD','USD_CHF','NZD_USD','USD_CAD'];

        $.each(currency,function (idx,curr) {

            oldPositionRecord[curr] = '';
            newPositionRecord[curr] = '';

            oldOrderRecord[curr] = '';
            newOrderRecord[curr] = '';
        });

        function getPositionBook($time){

            $.each(currency,function(ind,curr){

                $.ajax({
                    url:"https://api-fxtrade.oanda.com/v3/instruments/"+curr+"/positionBook?time="+$time,
                    cache:false,
                    contentType:'application/json',
                    headers:{
                        Authorization:'Bearer 06f8632792308778ce654bed981b1a02-0d881ebb0afacfacb3bea08961494d49'
                    },
                    async:false,
                    success:function (response) {
                       // console.log(response);
                        var positionBook = response['positionBook'];
                        var price = positionBook.price;
                        var bucketWidth = positionBook.bucketWidth;
                        var time = positionBook.time;
                        //console.log(positionBook);
                        var string = '';

                        var bucketData = {};
                        $.each(positionBook.buckets,function(index,bucket){
                            if(parseFloat(price)<=parseFloat(bucket.price)){
//                            console.log(index-1,positionBook.buckets[index-1]);
//                            console.log(index,bucket);
                                previousBucket = positionBook.buckets[index-1];
                                string +='<li><p><span><b>'+curr+'</b></span>::Price:'+previousBucket.price+'|lc:'+previousBucket.longCountPercent+'|sc:'+previousBucket.shortCountPercent+' - ' +
                                    'Price:'+bucket.price+'|lc:'+bucket.longCountPercent+'|sc:'+bucket.shortCountPercent+'</p>' +
                                    '<strong>'+price+'</strong> Time:'+time+'</li>';

                                newPositionRecord[curr] = previousBucket.price+'|lc:'+previousBucket.longCountPercent+'|sc:'+previousBucket.shortCountPercent+'-'+bucket.price+'|lc:'+bucket.longCountPercent+'|sc:'+bucket.shortCountPercent;

                                bucketData['instrument'] = positionBook.instrument;
                                bucketData['main_price'] = price;
                                bucketData['time'] = time;
                                bucketData['unix_time'] = positionBook.unixTime;
                                bucketData['pb_price_1'] = previousBucket.price;
                                bucketData['pb_lc_1'] = previousBucket.longCountPercent;
                                bucketData['pb_sc_1'] = previousBucket.shortCountPercent;
                                bucketData['pb_price_2'] = bucket.price;
                                bucketData['pb_lc_2'] = bucket.longCountPercent;
                                bucketData['pb_sc_2'] = bucket.shortCountPercent;

                                return false;
                            }
                        });

                        if(oldPositionRecord[curr] != newPositionRecord[curr]){
                            oldPositionRecord[curr] = newPositionRecord[curr];
                            $('#positionBook').append(string);

                            saveData(bucketData);
                        }

                    },
                    error:function (response) {
                        console.log(response);
                    }
                })
            });

        }

        function getOrderBook($time)    {

            $.each(currency,function (idx,curr) {

                $.ajax({
                    url:"https://api-fxtrade.oanda.com/v3/instruments/"+curr+"/orderBook?time="+$time,
                    cache:false,
                    contentType:'application/json',
                    headers:{
                        Authorization:'Bearer 06f8632792308778ce654bed981b1a02-0d881ebb0afacfacb3bea08961494d49'
                    },
                    async:false,
                    success:function (response) {
                        //console.log(response);
                        var positionBook = response['orderBook'];
                        var price = positionBook.price;
                        var bucketWidth = positionBook.bucketWidth;
                        var time = positionBook.time;
                        //console.log(positionBook);
                        var string = '';
                        var bucketData = {};

                        $.each(positionBook.buckets,function(index,bucket){
                            if(parseFloat(price)<=parseFloat(bucket.price)){
                                //console.log(index,bucket);
                                //console.log(index-1,positionBook.buckets[index-1]);
                                previousBucket = positionBook.buckets[index-1];
                                string +='<li><p><span><b>'+curr+'</b></span>::Price:'+previousBucket.price+'|lc:'+previousBucket.longCountPercent+'|sc:'+previousBucket.shortCountPercent+' - ' +
                                    'Price:'+bucket.price+'|lc:'+bucket.longCountPercent+'|sc:'+bucket.shortCountPercent+'</p>' +
                                    '<strong>'+price+'</strong> Time:'+time+'</li>';

                                newOrderRecord[curr] = curr+''+previousBucket.price+'|lc:'+previousBucket.longCountPercent+'|sc:'+previousBucket.shortCountPercent+'-'+bucket.price+'|lc:'+bucket.longCountPercent+'|sc:'+bucket.shortCountPercent;

                                bucketData['instrument'] = positionBook.instrument;
                                bucketData['main_price'] = price;
                                bucketData['time'] = time;
                                bucketData['unix_time'] = positionBook.unixTime;
                                bucketData['ob_price_1'] = previousBucket.price;
                                bucketData['ob_lc_1'] = previousBucket.longCountPercent;
                                bucketData['ob_sc_1'] = previousBucket.shortCountPercent;
                                bucketData['ob_price_2'] = bucket.price;
                                bucketData['ob_lc_2'] = bucket.longCountPercent;
                                bucketData['ob_sc_2'] = bucket.shortCountPercent;

                                return false;
                            }
                        });

                        if(oldOrderRecord[curr] != newOrderRecord[curr]){
                            oldOrderRecord[curr] = newOrderRecord[curr];
                            $('#orderBook').append(string);

                            saveData(bucketData);
                        }

                    },
                    error:function (response) {
                        console.log(response);
                    }
                })

            });

        };

        function getCandleMid(){

            var d1 = new Date();
            var d2 = new Date( d1.getUTCFullYear(), d1.getUTCMonth(), d1.getUTCDate(), d1.getUTCHours(), d1.getUTCMinutes(), d1.getUTCSeconds() );
            $date = Math.floor((d2.getTime()-(2*60*60*1000))/1000);

            $.each(currency,function(idx,curr){
                $.ajax({
                    url:"https://api-fxtrade.oanda.com/v3/instruments/"+curr+"/candles?price=M&granularity=M30&from="+$date,
                    cache:false,
                    contentType:'application/json',
                    headers:{
                        Authorization:'Bearer 06f8632792308778ce654bed981b1a02-0d881ebb0afacfacb3bea08961494d49'
                    },
                    async:false,
                    success:function (response) {
                        console.log('candle',response);

                        saveCandleData(response);

                    },
                    error:function (response) {
                        console.log(response);
                    }
                })
            });
        };

        function getCandleAsk(){

            var d1 = new Date();
            var d2 = new Date( d1.getUTCFullYear(), d1.getUTCMonth(), d1.getUTCDate(), d1.getUTCHours(), d1.getUTCMinutes(), d1.getUTCSeconds() );
            $date = Math.floor((d2.getTime()-(2*60*60*1000))/1000);


            $.each(currency,function(idx,curr){
                $.ajax({
                    url:"https://api-fxtrade.oanda.com/v3/instruments/"+curr+"/candles?price=A&granularity=M30&from="+$date,
                    cache:false,
                    contentType:'application/json',
                    headers:{
                        Authorization:'Bearer 06f8632792308778ce654bed981b1a02-0d881ebb0afacfacb3bea08961494d49'
                    },
                    async:false,
                    success:function (response) {
                        console.log('candle',response);

                        saveCandleData(response);

                    },
                    error:function (response) {
                        console.log(response);
                    }
                })
            });
        };


        function getCandleBid(){

            var d1 = new Date();
            var d2 = new Date( d1.getUTCFullYear(), d1.getUTCMonth(), d1.getUTCDate(), d1.getUTCHours(), d1.getUTCMinutes(), d1.getUTCSeconds() );
            $date = Math.floor((d2.getTime()-(6*60*60*1000))/1000);

            $.each(currency,function(idx,curr){
                $.ajax({
                    url:"https://api-fxtrade.oanda.com/v3/instruments/"+curr+"/candles?price=B&granularity=M30&from="+$date,
                    cache:false,
                    contentType:'application/json',
                    headers:{
                        Authorization:'Bearer 06f8632792308778ce654bed981b1a02-0d881ebb0afacfacb3bea08961494d49'
                    },
                    async:false,
                    success:function (response) {
                        console.log('candle',response);

                        saveCandleData(response);

                    },
                    error:function (response) {
                        console.log(response);
                    }
                })
            });
        };

        //setInterval(getPositionBook,10000);
        //setInterval(getOrderBook,10000);
        //setInterval(getCandleMid,60000);
        //setInterval(getCandleAsk,60000);
        //setInterval(getCandleBid,60000);

        saveData = function(data){

            $.ajax({
                url:"{{ url('saveTradingData') }}",
                method:'POST',
                cache:false,
                data:data,
                dataType:'json',
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                },
                async:false,
                success:function(response){
                    console.log(response);

                },error:function(response){
                    console.log(response);
                }
            })
        }

        saveCandleData = function(data){

            $.ajax({
                url:"{{ url('saveCandleData') }}",
                method:'POST',
                cache:false,
                data:data,
                dataType:'json',
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                },
                async:false,
                success:function(response){
                    console.log(response);

                },error:function(response){
                    console.log(response);
                }
            })
        };


        var d1 = new Date();
        var str = d1.getUTCFullYear()+'-'+(d1.getUTCMonth()+1)+'-'+('24'/*d1.getDate()*/)+'T00:00:00.000Z';
        var d2 = new Date(str);
        console.log(d2.toISOString());
        console.log(d2.getTime());
        $time = d2.getTime();
        $date = (new Date()).getTime();

        while($time<=$date){
            $time = new Date($time+1200000);
            console.log($time);
            getPositionBook($time.toISOString());
            getOrderBook($time.toISOString());
            $time = $time.getTime();
        }


    </script>

    </body>
</html>
