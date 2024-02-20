import "./bootstrap";

import {
    Livewire,
    Alpine,
} from "../../vendor/livewire/livewire/dist/livewire.esm";

window.Alpine = Alpine;

Livewire.start();

import Chart from "chart.js/auto";
window.Chart = Chart;

import Swal from "sweetalert2";
window.Swal = Swal;

import flatpickr from "flatpickr";
window.flatpickr = flatpickr;

import tippy from "tippy.js";
tippy("[data-tippy-content]");

const encryptPasswords = (...elements) => {
    elements.forEach((element) => {
        element.value = btoa(btoa(element.value));
    });
};

window.encryptPasswords = encryptPasswords;