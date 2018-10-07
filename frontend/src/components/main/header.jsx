import React, { Component } from "react";

class Header extends Component {
  state = {};
  render() {
    return (
      <nav
        className="navbar navbar-expand-sm navbar-dark bg-dark"
        style={{ paddingLeft: 60, padding: 20 }}
      >
        <a className="navbar-brand" href="#" style={{ paddingLeft: 20 }}>
          ColorMe
        </a>
        <button
          className="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarsExample03"
          aria-controls="navbarsExample03"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span className="navbar-toggler-icon" />
        </button>

        <div className="collapse navbar-collapse" id="navbarsExample03">
          <ul className="navbar-nav ml-auto">
            <li className="nav-item active">
              <a className="nav-link" href="#">
                Find Workers <span className="sr-only">(current)</span>
              </a>
            </li>
            <li className="nav-item active">
              <a className="nav-link" href="#">
                How it works <span className="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    );
  }
}

export default Header;
