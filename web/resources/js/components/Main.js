import 'bootstrap';

import React from 'react';
import ReactDOM from 'react-dom';
import { useState, useEffect } from "react";
import App from '../layouts/App.js';

function Main() {
    return (
        <App />
    );
}

export default Main;

ReactDOM.render(<Main />, document.getElementById('gtoria-root'));