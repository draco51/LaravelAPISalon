import React, { Component } from "react";
import AdBox from "./../AdBox/AdBox";

class HomeBody extends Component {
  constructor(props) {
    super(props);
    this.state = {
      items: [],
      isLoaded: false
    };
  }

  componentDidMount() {
    fetch("https://jsonplaceholder.typicode.com/users")
      .then(res => res.json())
      .then(json => {
        this.setState({
          isLoaded: true,
          items: json
        });
      });
  }

  render() {
    return (
      <div className="Adbox">
        <ul>
          {this.state.items.map(item => (
            <li key={item.id}>Name: {item.name}</li>
          ))}
          ;
        </ul>
      </div>
    );
  }
}

export default HomeBody;
