import React, { Component } from "react";
import "./Adbox.css";
import { AsyncSeriesHook } from "tapable";

class AdBox extends Component {
  state = {
    userName: "Ishara Dhannjaya",
    profileImg: "",
    userTitle: "Hair Coloring and Styling",
    userDescription: "dasdadsa das das das d asd asads adsa "
  };

  render() {
    return (
      <div className="container border border-primary">
        {/* <div className="jumbotron-Adbox"> */}
        <div className="row">
          <div className="col-md-3" style={{ borderRight: 20 }}>
            <img
              src="https://randomuser.me/api/portraits/men/81.jpg"
              alt="profile picture"
              className="rounded-circle"
            />
            <div center>
              <p classNameName="lead">
                <div className="lable">{this.state.userName}</div>
              </p>
            </div>
          </div>
          <div className="col-xs-9">
            <div className="display-4">{this.state.userTitle}</div>
            <hr />
            <p>{this.state.userDescription}</p>
            <a className="btn btn-primary float-right" href="#" style={{}}>
              View More
            </a>
          </div>
        </div>
      </div>
      //   </div>
    );
  }
}

export default AdBox;
