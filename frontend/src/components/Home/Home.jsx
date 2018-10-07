import React, { Component } from "react";

import Header from "./../main/header";
import HomeCover from "./../main/home-cover";
import Footer from "./../main/footer";
import HomeBody from "./homeBody";

class Home extends Component {
  state = {};
  render() {
    return (
      <div container>
        <Header />
        <HomeCover subtitle="The Best Marketplace to Find and Hire Hair Stylist" />
        <HomeBody />
        <Footer />
      </div>
    );
  }
}

export default Home;
