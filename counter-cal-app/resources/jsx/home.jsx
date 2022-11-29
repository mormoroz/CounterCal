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






