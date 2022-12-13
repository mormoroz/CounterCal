import {easeQuadInOut} from "d3-ease";

import React from 'react';
import { render } from "react-dom";
import { CircularProgressbar } from "react-circular-progressbar";


// Animation
import AnimatedProgressProvider from "./ProgressCircleAnimationProvider";


const container = document.getElementById("progress-circle");
const percent = container.getAttribute('value');
render(
    <AnimatedProgressProvider
        valueStart={0}
        valueEnd={percent}
        duration={1.4}
        easingFunction={easeQuadInOut}
        repeat={false}
    >
        {value => {
            const roundedValue = Math.round(value);
            return (
                <CircularProgressbar
                    value={value}
                    text={`${roundedValue}%`}
                />
            );
        }}
    </AnimatedProgressProvider>,
    container);

var updateModal = document.getElementById('updateModal')
updateModal.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var user_product_id = button.getAttribute('data-bs-productID')
    var mass_factor = button.getAttribute('data-bs-mass_factor')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var user_product_id_inputs = updateModal.querySelectorAll("#product_id")
    user_product_id_inputs.forEach(input => input.value = user_product_id)

    var mass_factor_input = updateModal.querySelector(".modal-body #mass_factor")
    mass_factor_input.value = mass_factor;
})






