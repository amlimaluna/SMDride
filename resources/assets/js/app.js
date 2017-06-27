require('./bootstrap');
import Metronic from './metronic'
import Layout from './layout'

window.Metronic = Metronic();
window.Layout = Layout();

$(document).ready(function () {
    Metronic.init();
    Layout.init();
});