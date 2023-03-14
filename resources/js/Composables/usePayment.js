import { computed, isRef } from "vue";

export const usePayment = (price, interestRate, duration) => {
  const principle = computed(() => {
    return isRef(price) ? price.value : price;
  });

  const monthlyInterest = computed(() => {
    return (isRef(interestRate) ? interestRate.value : interestRate) / 100 / 12;
  });

  const numberOfPaymentMonths = computed(() => {
    return (isRef(duration) ? duration.value : duration) * 12;
  });

  const monthlyPayment = computed(() => {
    return (
      (principle.value *
        monthlyInterest.value *
        Math.pow(1 + monthlyInterest.value, numberOfPaymentMonths.value)) /
      (Math.pow(1 + monthlyInterest.value, numberOfPaymentMonths.value) - 1)
    );
  });

  const totalPaid = computed(() => {
    return numberOfPaymentMonths.value * monthlyPayment.value;
  });

  const totalInterest = computed(() => {
    return totalPaid.value - principle.value;
  });

  return { monthlyPayment, totalPaid, totalInterest };
};
