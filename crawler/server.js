var express = require('express');
var fs = require('fs');
var request = require('request');
var cheerio = require('cheerio');
var iconv = require('iconv-lite');
var app = express();
var MongoClient = require('mongodb').MongoClient
    , assert = require('assert');

app.get('/scrape/abadi', function (req, res) {
    var count = 0;
    while (count <= 200) {
        var url = 'http://abadi.wsrun.net/php/admin_associado.php?action=Relat_Associados&Codigo_Parceiro=193121&Nome=&Municipio=&Nome=&Municipio=&from=' + count;

        request(url, function (error, response, html) {
            if (!error) {
                var $ = cheerio.load(html);

                $('.td12 > a').each(function (k, v) {
                    var data = $(this);
                    var urlBox = data.attr('href');
                    urlBox = 'http://abadi.wsrun.net/' + urlBox;

                    function callbackResult(cb) {
                        request({
                            uri: urlBox,
                            encoding: null
                        }, function (errorModal, responseModal, htmlModal) {
                            var htmlModal = iconv.decode(htmlModal, 'iso-8859-1');

                            var $$ = cheerio.load(htmlModal);

                            if (!errorModal) {
                                var json = {
                                    responsible: "",
                                    address: "",
                                    neighborhood: "",
                                    city: "",
                                    state: "",
                                    email: "",
                                    phone: ""
                                };

                                $$('.td12').each(function (key, values) {
                                    if (key % 2 != 0) {
                                        var dataModal = $(this);
                                        var txt = dataModal.text().trim();

                                        switch (key) {
                                            case 1:
                                                json.responsible = txt;
                                                break;
                                            case 3:
                                                json.address = txt;
                                                break;
                                            case 7:
                                                json.neighborhood = txt;
                                                break;
                                            case 9:
                                                json.city = txt;
                                                break;
                                            case 11:
                                                json.state = txt;
                                                break;
                                            case 15:
                                                json.email = txt;
                                                break;
                                            case 21:
                                                json.phone = txt;
                                                cb(json);
                                                break;
                                            default:
                                                break;
                                        }
                                    }
                                });
                            }
                        });
                    }

                    var mongo = 'mongodb://localhost:27017/ficha_rapida_br';

                    MongoClient.connect(mongo, function (err, db) {
                        var col = db.collection('abadi');

                        callbackResult(function (res) {
                            if (res.email != '' && res.email != undefined) {
                                col.insertOne(res, function (err, r) {
                                    db.close();
                                });
                            }
                        });
                    });

                });
            }
        });

        count += 50;
    }

    res.json({finalizado: true});
});

app.get('/scrape/abadi', function (req, res) {
    var count = 0;
    while (count <= 200) {
        var url = 'http://abadi.wsrun.net/php/admin_associado.php?action=Relat_Associados&Codigo_Parceiro=193121&Nome=&Municipio=&Nome=&Municipio=&from=' + count;

        request(url, function (error, response, html) {
            if (!error) {
                var $ = cheerio.load(html);

                $('.td12 > a').each(function (k, v) {
                    var data = $(this);
                    var urlBox = data.attr('href');
                    urlBox = 'http://abadi.wsrun.net/' + urlBox;

                    function callbackResult(cb) {
                        request({
                            uri: urlBox,
                            encoding: null
                        }, function (errorModal, responseModal, htmlModal) {
                            var htmlModal = iconv.decode(htmlModal, 'iso-8859-1');

                            var $$ = cheerio.load(htmlModal);

                            if (!errorModal) {
                                var json = {
                                    responsible: "",
                                    address: "",
                                    neighborhood: "",
                                    city: "",
                                    state: "",
                                    email: "",
                                    phone: ""
                                };

                                $$('.td12').each(function (key, values) {
                                    if (key % 2 != 0) {
                                        var dataModal = $(this);
                                        var txt = dataModal.text().trim();

                                        switch (key) {
                                            case 1:
                                                json.responsible = txt;
                                                break;
                                            case 3:
                                                json.address = txt;
                                                break;
                                            case 7:
                                                json.neighborhood = txt;
                                                break;
                                            case 9:
                                                json.city = txt;
                                                break;
                                            case 11:
                                                json.state = txt;
                                                break;
                                            case 15:
                                                json.email = txt;
                                                break;
                                            case 21:
                                                json.phone = txt;
                                                cb(json);
                                                break;
                                            default:
                                                break;
                                        }
                                    }
                                });
                            }
                        });
                    }

                    var mongo = 'mongodb://localhost:27017/ficha_rapida_br';

                    MongoClient.connect(mongo, function (err, db) {
                        var col = db.collection('abadi');

                        callbackResult(function (res) {
                            if (res.email != '' && res.email != undefined) {
                                col.insertOne(res, function (err, r) {
                                    db.close();
                                });
                            }
                        });
                    });

                });
            }
        });

        count += 50;
    }

    res.json({finalizado: true});
});

app.listen('8081');

console.log('Magic happens on port 8081');

exports = module.exports = app;