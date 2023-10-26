import React from "react";
import Hero from "../components/hero";
import Navbar from "../components/navbar";
import Footer from "../components/footer";

const HomePage = () => {
  return (
    <>
      <Navbar />
      <Hero />
      <h2>Halaman Home</h2>
      <Footer />
    </>
  );
};

export default HomePage;