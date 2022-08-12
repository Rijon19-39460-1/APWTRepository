import React from "react";
import { Link } from "react-router-dom";
const Nav = () => {
    return(
        <>
        <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
        <Link to='/' className="nav-link text-light">Home</Link>
  <div className="collapse navbar-collapse text-right">
    <ul className="navbar-nav">
      <li className="nav-item">
      <Link to='/Api' className="nav-link">Api</Link>
      </li>
    </ul>
  </div>
</nav>
        </>
    )
}
export default Nav;