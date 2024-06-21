import React from 'react';
import {
    MDBCard,
    MDBCardBody,
    MDBContainer,
    MDBRow,
    MDBCol,
    MDBBtn,
    MDBIcon,
    MDBTypography,
    MDBTable,
    MDBTableHead,
    MDBTableBody,
} from "mdb-react-ui-kit";
import { reduce } from 'lodash';


class Invoice extends React.Component {
    render() {
        const { cart, total, translations } = this.props;
        return (
            <MDBContainer className="py-5">
                <MDBCard className="p-4">
                    <MDBCardBody>

                        <MDBContainer>
                            <MDBCol md="12" className="text-center">

                                <p className="pt-0"  style={{ color: "#5d9fc5", fontSize:"26px" }}>Irosha Rajapaksha</p>

                                <p className="pt-0">www.IroshaRajapaksha.com</p>
                            </MDBCol>
                        </MDBContainer>
                        <MDBRow>
                            <MDBCol xl="8">
                                <MDBTypography listUnStyled>
                                    <li className="text-muted">
                                        <span style={{ color: "#5d9fc5" }}>Irosha Rajapaksha</span>
                                    </li>
                                    <li className="text-muted">Bandarawela</li>
                                    <li className="text-muted">Sri Lanka</li>
                                    <li className="text-muted">
                                        <MDBIcon fas icon="phone-alt" /> 077-6840032
                                    </li>
                                </MDBTypography>
                            </MDBCol>
                            <MDBCol xl="4">
                                <MDBTypography listUnStyled>

                                    <li className="text-muted">
                                        <MDBIcon fas icon="circle" style={{ color: "#84B0CA" }} />
                                        <span className="fw-bold ms-1">Creation Date: </span>
                                    </li>


                                </MDBTypography>
                            </MDBCol>
                        </MDBRow>
                        <MDBRow className="my-2 mx-1 justify-content-center">
                            <MDBTable striped borderless>
                                <MDBTableHead
                                    className="text-white"
                                    style={{ backgroundColor: "#84B0CA" }}
                                >
                                    <tr style={{ color: "blue" }}>
                                        <th scope="col" >ID</th>
                                        <th scope="col" >Product Name</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Amount</th>

                                    </tr>
                                </MDBTableHead>
                                <MDBTableBody>

                                    {cart.map((c) => (
                                        <tr key={c.id}>
                                            <td>#{c.id}</td>
                                            <td>{c.name}</td>
                                            <td>{c.pivot.quantity}</td>
                                            <td>{c.price}</td>

                                            <td>
                                                {window.APP.currency_symbol}{' '}
                                                {(c.price * c.pivot.quantity).toFixed(2)}
                                            </td>
                                        </tr>
                                    ))}

                                </MDBTableBody>
                            </MDBTable>
                        </MDBRow>
                        <MDBRow>

                            <MDBCol xl="3">

                                <p className="text-black float-start">
                                    <span className="text-black me-3"><strong> Total Amount : <span style={{ color: "red" }}>{window.APP.currency_symbol} {total}</span></strong></span>

                                </p>
                            </MDBCol>
                        </MDBRow>
                        <hr />
                        <MDBRow>
                            <MDBCol xl="10">
                                <p style={{ fontSize: "20px" }} ><strong>Thank you for your purchase !</strong></p>
                            </MDBCol>

                        </MDBRow>
                    </MDBCardBody>
                </MDBCard>
            </MDBContainer>
        );
    }
}

export default Invoice;
