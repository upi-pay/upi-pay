package com.wt.electricitybill.entities;

public class ElectricityData {

    private double totalCost;
    private String unitsTxt;

    public double getTotalCost() {
        return totalCost;
    }

    public void setTotalCost(double totalCost) {
        this.totalCost = totalCost;
    }

    public String getUnitsTxt() {
        return unitsTxt;
    }

    public void setUnitsTxt(String unitsTxt) {
        this.unitsTxt = unitsTxt;
    }

    public void generateBill() {

        double ratePer50Units = 3.50;
        double ratePer150Units = 4.00;
        double ratePer250Units = 5.20;
        double rateHigherThan250Units = 6.50;

        int unitsConsumed = Integer.parseInt(getUnitsTxt());

        if (unitsConsumed <= 50)
            totalCost = ratePer50Units * unitsConsumed;
        if (unitsConsumed <= 150 && unitsConsumed > 50)
            totalCost = ratePer150Units * (unitsConsumed - 50) + (50 * ratePer50Units);
        if (unitsConsumed <= 250 && unitsConsumed > 150)
            totalCost = ratePer250Units * (unitsConsumed - 150) + (100 * ratePer150Units) + (50 * ratePer50Units);
        if (unitsConsumed > 250)
            totalCost = rateHigherThan250Units * (unitsConsumed - 250) + (100 * ratePer250Units) + (100 * ratePer150Units) + (50 * ratePer50Units);

        setTotalCost(totalCost);
    }

    @Override
    public String toString() {
        return "Bill = " + totalCost;
    }
}
