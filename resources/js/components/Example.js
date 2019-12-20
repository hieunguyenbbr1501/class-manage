import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
export default class Example extends Component {
    constructor(){
        super();
        console.log('hello');
    }
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header text-center">Welcome</div>

                            <div className="card-body row justify-content-around">
                                <a href="/student/login.html" className="btn btn-success">Login as Student</a>
                                <a href="/lecturer/login.html" className="btn btn-success">Login as Lecturer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
